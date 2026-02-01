<?php
// Admin Panel for DTU Admission System
session_start();

// Include configuration
require_once 'config.php';

// Simple authentication (in production, use proper authentication)
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    // For demo purposes, we'll auto-login
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = 'admin';
}

// Get applications from database
$applications = [];
try {
    $stmt = $pdo->prepare("SELECT * FROM applicants ORDER BY application_date DESC");
    $stmt->execute();
    $applications = $stmt->fetchAll();
} catch (Exception $e) {
    $error = "Error fetching applications: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTU Admission Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', Arial, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #052963 0%, #0d4a9e 100%);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 24px;
        }

        .logout-btn {
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .content {
            padding: 30px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #052963;
        }

        .stat-label {
            color: #666;
            margin-top: 5px;
        }

        .filters {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
        }

        .filter-group label {
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        .filter-group select, .filter-group input {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .status-pending { color: #ffc107; }
        .status-review { color: #007bff; }
        .status-shortlisted { color: #28a745; }
        .status-rejected { color: #dc3545; }
        .status-admitted { color: #28a745; }
        .status-cancelled { color: #6c757d; }

        .action-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
            font-size: 12px;
        }

        .view-btn { background: #007bff; color: white; }
        .edit-btn { background: #28a745; color: white; }
        .delete-btn { background: #dc3545; color: white; }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
        }

        .page-btn {
            padding: 8px 15px;
            border: 1px solid #ddd;
            background: white;
            cursor: pointer;
            border-radius: 4px;
        }

        .page-btn.active {
            background: #052963;
            color: white;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border: 1px solid #f5c6cb;
            text-align: center;
        }

        @media (max-width: 768px) {
            .filters {
                flex-direction: column;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .logout-btn {
                align-self: flex-end;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-tachometer-alt"></i> DTU Admission Admin Panel</h1>
            <button class="logout-btn" onclick="location.href='index.php'">
                <i class="fas fa-home"></i> Back to Portal
            </button>
        </div>

        <div class="content">
            <?php if (isset($error)): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="stats">
                <div class="stat-card">
                    <div class="stat-number"><?php echo count($applications); ?></div>
                    <div class="stat-label">Total Applications</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo count(array_filter($applications, function($app) { return $app['application_status'] === 'pending'; })); ?></div>
                    <div class="stat-label">Pending Review</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo count(array_filter($applications, function($app) { return $app['application_status'] === 'shortlisted'; })); ?></div>
                    <div class="stat-label">Shortlisted</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo count(array_filter($applications, function($app) { return $app['application_status'] === 'admitted'; })); ?></div>
                    <div class="stat-label">Admitted</div>
                </div>
            </div>

            <div class="filters">
                <div class="filter-group">
                    <label for="status-filter">Status</label>
                    <select id="status-filter">
                        <option value="">All Statuses</option>
                        <option value="pending">Pending</option>
                        <option value="review">Review</option>
                        <option value="shortlisted">Shortlisted</option>
                        <option value="rejected">Rejected</option>
                        <option value="admitted">Admitted</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="category-filter">Category</label>
                    <select id="category-filter">
                        <option value="">All Categories</option>
                        <option value="general">General</option>
                        <option value="obc">OBC</option>
                        <option value="sc">SC</option>
                        <option value="st">ST</option>
                        <option value="ews">EWS</option>
                        <option value="pwd">PWD</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="admission-year-filter">Admission Year</label>
                    <select id="admission-year-filter">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="search-input">Search</label>
                    <input type="text" id="search-input" placeholder="Search by name, email, or application number">
                </div>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>App No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Qualification</th>
                            <th>Entrance Exam</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($applications)): ?>
                            <?php foreach ($applications as $app): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($app['application_number']); ?></td>
                                    <td><?php echo htmlspecialchars($app['first_name'] . ' ' . $app['last_name']); ?></td>
                                    <td><?php echo htmlspecialchars($app['email']); ?></td>
                                    <td><?php echo htmlspecialchars($app['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($app['degree_name'] . ' (' . $app['percentage'] . '%)'); ?></td>
                                    <td><?php echo htmlspecialchars($app['entrance_exam'] . ': ' . $app['exam_score']); ?></td>
                                    <td><span class="status-<?php echo $app['application_status']; ?>"><?php echo ucfirst($app['application_status']); ?></span></td>
                                    <td><?php echo date('d M Y', strtotime($app['application_date'])); ?></td>
                                    <td>
                                        <button class="action-btn view-btn" onclick="viewApplication('<?php echo $app['id']; ?>')">View</button>
                                        <button class="action-btn edit-btn" onclick="editApplication('<?php echo $app['id']; ?>')">Edit</button>
                                        <button class="action-btn delete-btn" onclick="deleteApplication('<?php echo $app['id']; ?>')">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" style="text-align: center;">No applications found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">Next →</button>
            </div>
        </div>
    </div>

    <script>
        function viewApplication(id) {
            alert('Viewing application ID: ' + id);
            // In a real implementation, this would open a modal or navigate to a detail page
        }

        function editApplication(id) {
            alert('Editing application ID: ' + id);
            // In a real implementation, this would open an edit form
        }

        function deleteApplication(id) {
            if (confirm('Are you sure you want to delete this application?')) {
                alert('Deleting application ID: ' + id);
                // In a real implementation, this would send a delete request
            }
        }

        // Filter functionality
        document.getElementById('status-filter').addEventListener('change', function() {
            filterTable();
        });

        document.getElementById('category-filter').addEventListener('change', function() {
            filterTable();
        });

        document.getElementById('admission-year-filter').addEventListener('change', function() {
            filterTable();
        });

        document.getElementById('search-input').addEventListener('input', function() {
            filterTable();
        });

        function filterTable() {
            // In a real implementation, this would filter the table based on selections
            console.log('Filtering table...');
        }
    </script>
</body>
</html>