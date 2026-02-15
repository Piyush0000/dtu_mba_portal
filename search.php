<?php
$query = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

$pages = [
    'index.php' => 'Home',
    'about.php' => 'About Us',
    'admission_dtu.php' => 'Admission',
    'placements.php' => 'Placements',
    'student_life.php' => 'Student Corner',
    'gallery.php' => 'Gallery',
    'faculty.php' => 'Faculty Members',
    'clubs.php' => 'Clubs and Societies'
];

$results = [];

if (!empty($query)) {
    foreach ($pages as $file => $title) {
        if (file_exists($file)) {
            $content = file_get_contents($file);
            // Remove scripts and styles to avoid matching code
            $content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $content);
            $content = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', "", $content);
            $plain_text = strip_tags($content);
            
            if (stripos($plain_text, $query) !== false) {
                // Find a small snippet
                $pos = stripos($plain_text, $query);
                $start = max(0, $pos - 100);
                $snippet = substr($plain_text, $start, 250);
                $snippet = str_ireplace($query, "<mark>$query</mark>", $snippet);
                
                $results[] = [
                    'file' => $file,
                    'title' => $title,
                    'snippet' => "..." . trim($snippet) . "..."
                ];
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - DSM DTU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Outfit', Arial, sans-serif; background-color: #f8f9fa; color: #333; }
        
        /* Header Styles */
        .top-header { background: white; padding: 15px 40px; display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid #e67e22; }
        .logo-section { display: flex; align-items: center; gap: 20px; }
        .university-info h1 { font-size: 20px; color: #c0392b; font-weight: 700; margin-bottom: 2px; }
        .university-info h2 { font-size: 16px; color: #2980b9; font-weight: 600; margin-bottom: 5px; }
        .university-info p { font-size: 13px; color: #555; line-height: 1.5; }
        .header-right { display: flex; align-items: center; gap: 20px; }
        .search-box { display: flex; align-items: center; border: 1px solid #ddd; border-radius: 4px; overflow: hidden; }
        .search-box input { padding: 8px 15px; border: none; outline: none; font-size: 14px; width: 150px; }
        .search-box button { background: white; border: none; padding: 8px 12px; cursor: pointer; color: #666; }

        /* Navigation */
        .main-nav { background: linear-gradient(135deg, #3498db 0%, #5dade2 100%); padding: 0; }
        .main-nav ul { list-style: none; display: flex; justify-content: center; max-width: 1200px; margin: 0 auto; }
        .main-nav a { display: block; padding: 15px 30px; color: white; text-decoration: none; font-weight: 600; font-size: 14px; transition: background 0.3s; border-right: 1px solid rgba(255,255,255,0.2); }
        .main-nav a:hover { background: #e67e22; }

        /* Results Section */
        .results-container { max-width: 900px; margin: 50px auto; padding: 0 20px; min-height: 400px; }
        .results-header { margin-bottom: 30px; border-bottom: 2px solid #ecf0f1; padding-bottom: 15px; }
        .results-header h2 { font-size: 24px; color: #2c3e50; }
        .results-header p { color: #7f8c8d; margin-top: 5px; }
        
        .result-item { background: white; padding: 25px; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-left: 5px solid #3498db; transition: transform 0.2s; }
        .result-item:hover { transform: translateX(5px); }
        .result-link { font-size: 18px; font-weight: 700; color: #2980b9; text-decoration: none; display: block; margin-bottom: 10px; }
        .result-link:hover { text-decoration: underline; }
        .result-snippet { font-size: 14px; color: #555; line-height: 1.6; }
        mark { background: #fff3cd; color: #856404; padding: 0 2px; border-radius: 2px; }
        
        .no-results { text-align: center; padding: 50px; background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .no-results i { font-size: 50px; color: #bdc3c7; margin-bottom: 20px; }

        /* Footer */
        .footer { background: #2c3e50; color: white; padding: 40px; margin-top: 50px; border-top: 5px solid #e67e22; }
        .footer-content { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; }
        .footer-section h4 { font-size: 16px; font-weight: 700; margin-bottom: 12px; color: #e67e22; }
        .footer-section a { color: white; text-decoration: none; font-size: 14px; display: block; margin-bottom: 8px; }
        .footer-section a:hover { color: #e67e22; }
    </style>
</head>
<body>
    <header class="top-header">
        <div class="logo-section">
            <div class="logo-placeholder">
                <img src="images/logos/dtu_logo.png" alt="DTU Logo" style="width: 80px; height: 80px; border-radius: 50%;">
            </div>
            <div class="university-info">
                <h1>DELHI SCHOOL OF MANAGEMENT</h1>
                <h2>DELHI TECHNOLOGICAL UNIVERSITY</h2>
                <p>formerly Delhi College of Engineering</p>
            </div>
        </div>
        <div class="header-right">
            <div class="search-box">
                <input type="text" placeholder="Search..." id="searchQuery" value="<?php echo $query; ?>">
                <button id="searchBtn"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="admission_dtu.php">Admission</a></li>
            <li><a href="placements.php">Placements</a></li>
            <li><a href="student_life.php">Student Corner</a></li>
        </ul>
    </nav>

    <div class="results-container">
        <div class="results-header">
            <h2>Search Results for "<?php echo $query; ?>"</h2>
            <p><?php echo count($results); ?> matches found</p>
        </div>

        <?php if (!empty($results)): ?>
            <?php foreach ($results as $result): ?>
                <div class="result-item">
                    <a href="<?php echo $result['file']; ?>" class="result-link"><?php echo $result['title']; ?></a>
                    <div class="result-snippet"><?php echo $result['snippet']; ?></div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-results">
                <i class="fas fa-search"></i>
                <h3>No results found</h3>
                <p>Try searching for different keywords like 'placements', 'admission', or 'MBA'.</p>
            </div>
        <?php endif; ?>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <a href="index.php">• Home</a>
                <a href="about.php">• About Us</a>
                <a href="admission_dtu.php">• Admission</a>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('searchBtn').addEventListener('click', function() {
            const q = document.getElementById('searchQuery').value;
            if(q) window.location.href = 'search.php?q=' + encodeURIComponent(q);
        });
        document.getElementById('searchQuery').addEventListener('keypress', function(e) {
            if(e.key === 'Enter') {
                const q = this.value;
                if(q) window.location.href = 'search.php?q=' + encodeURIComponent(q);
            }
        });
    </script>
</body>
</html>
