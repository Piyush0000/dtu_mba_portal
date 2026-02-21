<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Clubs and Committees - Delhi School of Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Source Sans Pro', Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
        }

        /* Header Styles */
        .top-header {
            background: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #e67e22;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo-placeholder {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #c0392b 0%, #e74c3c 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 12px;
            text-align: center;
        }

        .university-info h1 {
            font-size: 16px;
            color: #c0392b;
            font-weight: 700;
        }

        .university-info h2 {
            font-size: 14px;
            color: #2980b9;
            font-weight: 600;
        }

        .university-info p {
            font-size: 11px;
            color: #555;
            line-height: 1.4;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-box {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }

        .search-box input {
            padding: 8px 15px;
            border: none;
            outline: none;
            font-size: 14px;
            width: 150px;
        }

        .search-box button {
            background: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            color: #666;
        }

        .social-icons {
            display: flex;
            gap: 5px;
        }

        .social-icons a {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            font-size: 18px;
        }

        .social-icons a.facebook { background: #3b5998; }
        .social-icons a.twitter { background: #000; }
        .social-icons a.linkedin { background: #0077b5; }
        .social-icons a.instagram { 
            background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        }

        /* Navigation */
        .main-nav {
            background: linear-gradient(135deg, #3498db 0%, #5dade2 100%);
            padding: 0;
        }

        .main-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-nav li {
            position: relative;
        }

        .main-nav a {
            display: block;
            padding: 15px 30px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s;
            border-right: 1px solid rgba(255,255,255,0.2);
        }

        .main-nav li:first-child a {
            border-left: 1px solid rgba(255,255,255,0.2);
        }

        .main-nav a:hover, .main-nav a.active {
            background: #e67e22;
        }

        /* Page Content */
        .page-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            font-family: 'Merriweather', serif;
            font-size: 28px;
            color: #6c5ce7;
            font-weight: 700;
            margin-bottom: 40px;
        }

        /* Section Banner */
        .section-banner {
            background: linear-gradient(135deg, #a29bfe, #6c5ce7);
            padding: 20px 30px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .section-banner h2 {
            font-size: 24px;
            color: white;
            font-weight: 700;
        }

        /* Committees List */
        .committees-list {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            margin-bottom: 50px;
        }

        .committees-list ul {
            list-style: none;
        }

        .committees-list li {
            padding: 15px 0;
            border-bottom: 1px solid #ecf0f1;
            font-size: 16px;
            color: #2c3e50;
        }

        .committees-list li:last-child {
            border-bottom: none;
        }

        /* Clubs Grid */
        .clubs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            margin-bottom: 50px;
        }

        .club-item {
            padding: 15px;
            font-size: 15px;
            color: #2c3e50;
            border-bottom: 1px solid #ecf0f1;
        }
        .club-item:nth-child(3n) {
            border-right: none;
        }

        /* footer css handled by footer.php */

        /* Responsive */
        @media (max-width: 992px) {
            .clubs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 768px) {
            .top-header {
                flex-direction: column;
                gap: 15px;
                padding: 15px;
            }

            .main-nav ul {
                flex-wrap: wrap;
            }

            .main-nav a {
                padding: 12px 15px;
                font-size: 12px;
            }

            .clubs-grid {
                grid-template-columns: 1fr;
            }

            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="top-header">
        <div class="logo-section">
            <div class="logo-placeholder">
                <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_1769887371671.png')); ?>" alt="DTU Logo" style="width: 80px; height: 80px; border-radius: 50%;">
            </div>
            <div class="university-info">
                <h1>DELHI SCHOOL OF MANAGEMENT</h1>
                <h2>DELHI TECHNOLOGICAL UNIVERSITY</h2>
                <p>formerly Delhi College of Engineering<br>
                (under Delhi Act 6 of 2009, Govt. of NCT of Delhi)<br>
                Accredited with 'A+' Grade (CGPA 3.47 out of 4) by NAAC (2nd cycle)<br>
                ISO 9001:2015 Certified</p>
            </div>
        </div>
        <div class="header-right">
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="social-icons">
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="twitter"><i class="fab fa-x-twitter"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="admission_dtu.php">Admission</a></li>
            <li><a href="placements.php">Placements</a></li>
            <li><a href="student_life.php" class="active">Student Corner</a></li>
            <li><a href="https://hostels.dtu.ac.in/" target="_blank">Hostel</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="page-container">
        <h1 class="page-title">STUDENT CLUBS AND COMMITTEES</h1>

        <!-- DSM Committees Section -->
        <div class="section-banner">
            <h2>DSM COMMITTEES</h2>
        </div>

        <div class="committees-list">
            <ul>
                <li>Corporate Relations and Placement Committee</li>
                <li>Public Relations Committee</li>
                <li>Alumni Relations Committee</li>
                <li>Sanskriti-The Cultural Committee</li>
            </ul>
        </div>

        <!-- DSM Clubs Section -->
        <div class="section-banner">
            <h2>DSM CLUBS</h2>
        </div>

        <div class="clubs-grid">
            <div class="club-item">Finesco (Finance Club)</div>
            <div class="club-item">E-Cell (Entrepreneurship Cell)</div>
            <div class="club-item">Sanrakshan (Social Club)</div>
            
            <div class="club-item">M-Cube (Marketing Club)</div>
            <div class="club-item">Sporticus (Sports Club)</div>
            <div class="club-item"></div>
            
            <div class="club-item">Netritva (Human Resource Club)</div>
            <div class="club-item">DSM Chronicle (College Business Magazine)</div>
            <div class="club-item"></div>
            
            <div class="club-item">ITech (IT Club)</div>
            <div class="club-item">Alfaaz (Literary & Debating Club)</div>
            <div class="club-item"></div>
            
            <div class="club-item">Arth (Operations Club)</div>
            <div class="club-item">Z-Axis (Art & Photography Club)</div>
            <div class="club-item"></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script>
        // Search Functionality
        document.querySelector('.search-box button').addEventListener('click', function(e) {
            e.preventDefault();
            const query = document.querySelector('.search-box input').value;
            if(query) {
                window.location.href = `search.php?q=${encodeURIComponent(query)}`;
            }
        });

        document.querySelector('.search-box input').addEventListener('keypress', function(e) {
            if(e.key === 'Enter') {
                e.preventDefault();
                const query = this.value;
                if(query) {
                    window.location.href = `search.php?q=${encodeURIComponent(query)}`;
                }
            }
        });
    </script>
</body>
</html>
