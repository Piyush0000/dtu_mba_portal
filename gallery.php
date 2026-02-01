<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Delhi School of Management</title>
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
            text-align: center;
            font-family: 'Merriweather', serif;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .page-subtitle {
            text-align: center;
            font-size: 16px;
            color: #7f8c8d;
            margin-bottom: 40px;
        }

        /* Filter Section */
        .filter-section {
            margin-bottom: 30px;
        }

        .filter-label {
            display: inline-block;
            font-size: 14px;
            color: #2c3e50;
            margin-right: 15px;
            font-weight: 600;
        }

        .filter-buttons {
            display: inline-flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            color: white;
        }

        .filter-btn.all {
            background: #95a5a6;
        }

        .filter-btn.events {
            background: #052963;
        }

        .filter-btn.campus {
            background: #052963;
        }

        .filter-btn.student-life {
            background: #052963;
        }

        .filter-btn.convocation {
            background: #052963;
        }

        .filter-btn:hover, .filter-btn.active {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        /* Albums Grid */
        .albums-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .album-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .album-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .album-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .album-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .album-info {
            padding: 15px;
            text-align: center;
        }

        .album-title-label {
            font-size: 11px;
            color: #7f8c8d;
            margin-bottom: 5px;
        }

        .album-title {
            font-size: 16px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .album-count {
            font-size: 12px;
            color: #95a5a6;
        }

        /* Featured Videos Section */
        .videos-section {
            margin-top: 60px;
        }

        .section-title {
            text-align: center;
            font-size: 24px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .videos-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .video-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .video-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #ecf0f1, #bdc3c7);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .play-button {
            width: 80px;
            height: 80px;
            background: rgba(52, 152, 219, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 35px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .play-button:hover {
            background: rgba(52, 152, 219, 1);
            transform: scale(1.1);
        }

        .video-title {
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #2c3e50;
            border-top: 3px solid #e67e22;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 40px;
        }

        .pagination a,
        .pagination span {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: #2c3e50;
            font-size: 14px;
            transition: all 0.3s;
        }

        .pagination a:hover {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }

        .pagination .active {
            background: #052963;
            color: white;
            border-color: #052963;
        }

        .pagination .disabled {
            color: #bdc3c7;
            cursor: not-allowed;
        }

        /* Footer */
        .footer {
            background: #5dade2;
            color: white;
            padding: 30px 40px;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .footer-section h4 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 8px;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
            font-size: 13px;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .footer-section p {
            font-size: 13px;
            line-height: 1.5;
        }

        .footer-bottom {
            background: #e67e22;
            padding: 10px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .albums-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .videos-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
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

            .albums-grid {
                grid-template-columns: 1fr;
            }

            .filter-buttons {
                width: 100%;
            }

            .filter-btn {
                flex: 1;
            }

            .footer-content {
                grid-template-columns: 1fr;
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
                <input type="text" placeholder="Value">
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
            <li><a href="about.php">About Us</a></li>
            <li><a href="admission_dtu.php">Admission</a></li>
            <li><a href="placements.php">Placements</a></li>
            <li><a href="student_life.php">Student Corner</a></li>
            <li><a href="#">Hostel</a></li>
            <li><a href="gallery.php" class="active">Gallery</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="page-container">
        <h1 class="page-title">GALLERY</h1>
        <p class="page-subtitle">A Glimpse into Life at DSM.</p>

        <!-- Filter Section -->
        <div class="filter-section">
            <span class="filter-label">Filter by:</span>
            <div class="filter-buttons">
                <button class="filter-btn all active" data-filter="all">All <i class="fas fa-chevron-down"></i></button>
                <button class="filter-btn events" data-filter="events">Events</button>
                <button class="filter-btn campus" data-filter="campus">Campus</button>
                <button class="filter-btn student-life" data-filter="student-life">Student Life</button>
                <button class="filter-btn convocation" data-filter="convocation">Convocation</button>
            </div>
        </div>

        <!-- Albums Grid -->
        <div class="albums-grid">
            <!-- Campus Album -->
            <div class="album-card" data-category="campus">
                <div class="album-image">
                    <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_3_1769851525566.png')); ?>" alt="Campus">
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 1:</p>
                    <h3 class="album-title">Campus</h3>
                    <p class="album-count">(Image Count: 15)</p>
                </div>
            </div>

            <!-- Annual Fest Album -->
            <div class="album-card" data-category="events">
                <div class="album-image">
                    <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_4_1769851525566.png')); ?>" alt="Annual Fest">
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 2:</p>
                    <h3 class="album-title">Annual Fest</h3>
                    <p class="album-count">(Image Count: 30)</p>
                </div>
            </div>

            <!-- Seminars Album -->
            <div class="album-card" data-category="events">
                <div class="album-image">
                    <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_0_1769858445747.png')); ?>" alt="Seminars">
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 3:</p>
                    <h3 class="album-title">Seminars</h3>
                    <p class="album-count">(Image Count: 20)</p>
                </div>
            </div>

            <!-- Sports Day Album -->
            <div class="album-card" data-category="student-life">
                <div class="album-image">
                    <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_1_1769858445747.png')); ?>" alt="Sports Day">
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 4:</p>
                    <h3 class="album-title">Sports Day</h3>
                    <p class="album-count">(Image Count: 25)</p>
                </div>
            </div>

            <!-- Cultural Events Album -->
            <div class="album-card" data-category="events">
                <div class="album-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #8e44ad, #9b59b6); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-music" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 5:</p>
                    <h3 class="album-title">Cultural Events</h3>
                    <p class="album-count">(Image Count: 40)</p>
                </div>
            </div>

            <!-- Workshops Album -->
            <div class="album-card" data-category="events">
                <div class="album-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #d35400, #e67e22); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-tools" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 6:</p>
                    <h3 class="album-title">Workshops</h3>
                    <p class="album-count">(Image Count: 18)</p>
                </div>
            </div>

            <!-- Convocation Album -->
            <div class="album-card" data-category="convocation">
                <div class="album-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #c0392b, #e74c3c); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-graduation-cap" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 7:</p>
                    <h3 class="album-title">Convocation 2024</h3>
                    <p class="album-count">(Image Count: 35)</p>
                </div>
            </div>

            <!-- Infrastructure Album -->
            <div class="album-card" data-category="campus">
                <div class="album-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #2980b9, #3498db); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-building" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="album-info">
                    <p class="album-title-label">Album Title 8:</p>
                    <h3 class="album-title">Infrastructure</h3>
                    <p class="album-count">(Image Count: 22)</p>
                </div>
            </div>
        </div>

        <!-- Featured Videos Section -->
        <div class="videos-section">
            <h2 class="section-title">Featured Videos</h2>
            <div class="videos-grid">
                <div class="video-card">
                    <div class="video-placeholder">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-title">Title: Campus Tour 2024</div>
                </div>
                <div class="video-card">
                    <div class="video-placeholder">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-title">Title: Placement Success Stories</div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <a href="#" class="disabled"><i class="fas fa-chevron-left"></i> Previous</a>
            <span class="active">1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Next <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="about.php">• About Us</a></li>
                    <li><a href="#">• Student Corner</a></li>
                    <li><a href="admission_dtu.php">• Admission</a></li>
                    <li><a href="placements.php">• Placements</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Explore</h4>
                <ul>
                    <li><a href="#">• Hostel</a></li>
                    <li><a href="gallery.php">• Gallery</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <p><strong>Tel:</strong> 011-27871018</p>
                <p><strong>Fax:</strong> 011-27871023</p>
            </div>
            <div class="footer-section">
                <p>© 2014 - 2025, Delhi Technological University, Shahbad Daulatpur, Main Bawana Road, DL - 42, IN</p>
            </div>
        </div>
    </footer>
    <div class="footer-bottom"></div>

    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const albumCards = document.querySelectorAll('.album-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                albumCards.forEach(card => {
                    if (filterValue === 'all') {
                        card.style.display = 'block';
                    } else {
                        if (card.getAttribute('data-category') === filterValue) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
