<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placements - Delhi School of Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
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

        .logo-section img {
            height: 80px;
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
            max-width: 1100px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .page-title {
            text-align: center;
            font-family: 'Merriweather', serif;
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 40px;
            font-weight: 700;
        }

        /* Committee Section */
        .committee-section {
            margin-bottom: 50px;
        }

        .committee-heading {
            text-align: center;
            font-size: 22px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .committee-image {
            text-align: center;
            margin-bottom: 30px;
        }

        .committee-image img {
            width: 100%;
            max-width: 700px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .committee-description {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            border-left: 4px solid #3498db;
        }

        .committee-description p {
            font-size: 15px;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }

        /* Reports Section */
        .reports-section {
            background: #e8e8e8;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .reports-section h3 {
            font-size: 18px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 15px;
            padding-left: 10px;
        }

        .report-button {
            display: block;
            background: #e67e22;
            color: white;
            padding: 12px 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s;
            max-width: 300px;
        }

        .report-button:hover {
            background: #d35400;
        }

        /* Snapshot Section */
        .snapshot-section {
            background: #e8e8e8;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .snapshot-section h3 {
            font-size: 18px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 25px;
            padding-left: 10px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px 15px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .stat-icon {
            font-size: 40px;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 12px;
            color: #555;
            line-height: 1.4;
        }

        /* Highlights Section */
        .highlights-section {
            margin-bottom: 40px;
        }

        .highlights-section h3 {
            font-size: 20px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .highlights-text {
            font-size: 15px;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
        }

        .highlights-list {
            list-style: none;
            margin-bottom: 30px;
        }

        .highlights-list li {
            font-size: 15px;
            color: #333;
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
        }

        .highlights-list li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #e67e22;
            font-weight: bold;
        }

        .charts-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .chart-container {
            text-align: center;
        }

        .chart-container img {
            width: 100%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        /* Testimonial Section */
        .testimonial-section {
            background: #e8e8e8;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .testimonial-section h3 {
            font-size: 18px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 25px;
            padding-left: 10px;
        }

        .testimonial-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .testimonial-logo {
            flex-shrink: 0;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
            border-radius: 8px;
            padding: 10px;
        }

        .testimonial-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .testimonial-text {
            flex: 1;
        }

        .testimonial-text p {
            font-size: 14px;
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* Contact Section */
        .contact-section {
            background: #e8e8e8;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .contact-section h3 {
            font-size: 18px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 20px;
            padding-left: 10px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .contact-item {
            font-size: 14px;
            color: #333;
        }

        .contact-item strong {
            display: block;
            margin-bottom: 3px;
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

        .footer-bottom-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: flex-end;
            padding-right: 40px;
        }

        .footer-bottom p {
            font-size: 12px;
            color: white;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .charts-grid {
                grid-template-columns: 1fr;
            }

            .contact-grid {
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

            .page-title {
                font-size: 28px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-card {
                flex-direction: column;
                text-align: center;
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
            <li><a href="placements.php" class="active">Placements</a></li>
            <li><a href="student_life.php">Student Corner</a></li>
            <li><a href="#">Hostel</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="page-container">
        <h1 class="page-title">Placements</h1>

        <!-- Committee Section -->
        <div class="committee-section">
            <h2 class="committee-heading">Corporate Relations and Placement Committee</h2>
            <div class="committee-image">
                <!-- Placeholder for team photo -->
                <div style="width: 100%; max-width: 700px; height: 300px; background: linear-gradient(135deg, #bdc3c7, #95a5a6); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 5px 20px rgba(0,0,0,0.15);">
                    <i class="fas fa-users" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
            <div class="committee-description">
                <p>Corporate Relations and Placement Committee at DSM, DTU is managed jointly by the Course Co-ordinators, Faculty, Academic Associates and the Students. Placement Committee is a student body which is responsible for arranging corporate interactions, guest lectures and also organizing corporate meets. During the placement sessions, when companies visit the campus, all the activities are managed by the Placement Committee. Also, arrangement for facilities like pre-placement talks, group discussions and personal interviews are coordinated by members of the committee.</p>
            </div>
        </div>

        <!-- Placement Reports -->
        <div class="reports-section">
            <h3>Placement Reports</h3>
            <a href="#" class="report-button">Placement Report 2024-25</a>
            <a href="#" class="report-button">Placement Report 2024-25</a>
            <a href="#" class="report-button">Placement Report 2024-25</a>
        </div>

        <!-- Placement Snapshot -->
        <div class="snapshot-section">
            <h3>Placement Snapshot</h3>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-value">299+</div>
                    <div class="stat-label">Batch Size</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-value">50+</div>
                    <div class="stat-label">No. of<br>Companies</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-value">10 LPA</div>
                    <div class="stat-label">Average<br>Package</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="stat-value">43 LPA</div>
                    <div class="stat-label">Highest<br>Package</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="stat-value">83+</div>
                    <div class="stat-label">No. of Offers<br>made</div>
                </div>
            </div>
        </div>

        <!-- Highlights of the season -->
        <div class="highlights-section">
            <h3>Highlights of the season</h3>
            <p class="highlights-text">Increase in the diversity of roles offered across the sectors and domains</p>
            <p class="highlights-text">The highest package increased by 13.28% Vis- a -Vis previous batches</p>
            <p class="highlights-text">The Following Domains across the sectors cover 72% of the total offers made to the batch</p>
            <ul class="highlights-list">
                <li>Marketing and Sales</li>
                <li>Human Resources</li>
                <li>Finance</li>
                <li>Consulting</li>
            </ul>

            <!-- Charts Section -->
            <div class="charts-grid">
                <div class="chart-container">
                    <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_0_1769851145346.png')); ?>" alt="Domain Distribution Chart">
                </div>
                <div class="chart-container">
                    <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_1_1769851145346.png')); ?>" alt="Sector Distribution Chart">
                </div>
            </div>

            <div class="chart-container" style="margin-top: 30px;">
                <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents('C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/uploaded_media_2_1769851145346.png')); ?>" alt="Profiles Offered Chart" style="max-width: 600px;">
            </div>
        </div>

        <!-- Recruiter Testimonial -->
        <div class="testimonial-section">
            <h3>Recruiter Testimonial</h3>
            <div class="testimonial-card">
                <div class="testimonial-logo">
                    <!-- EY Logo Placeholder -->
                    <div style="width: 100%; height: 100%; background: #ffe600; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <span style="font-size: 32px; font-weight: 900; color: #2e2e38;">EY</span>
                    </div>
                </div>
                <div class="testimonial-text">
                    <p>Corporate Relations and Placement Committee at DSM, DTU is managed jointly by the Course Co- for arranging corporate int activities are managed by the Placement Committee. Also, arrangement for facilities like pre-placement talks, group discussions and personal interviews are coordinated by members of the committee.</p>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-logo">
                    <!-- EY Logo Placeholder -->
                    <div style="width: 100%; height: 100%; background: #ffe600; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <span style="font-size: 32px; font-weight: 900; color: #2e2e38;">EY</span>
                    </div>
                </div>
                <div class="testimonial-text">
                    <p>Corporate Relations and Placement Committee at DSM, DTU is managed jointly by the Course Co- for arranging corporate int activities are managed by the Placement Committee. Also, arrangement for facilities like pre-placement talks, group discussions and personal interviews are coordinated by members of the committee.</p>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-logo">
                    <!-- EY Logo Placeholder -->
                    <div style="width: 100%; height: 100%; background: #ffe600; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <span style="font-size: 32px; font-weight: 900; color: #2e2e38;">EY</span>
                    </div>
                </div>
                <div class="testimonial-text">
                    <p>Corporate Relations and Placement Committee at DSM, DTU is managed jointly by the Course Co- for arranging corporate int activities are managed by the Placement Committee. Also, arrangement for facilities like pre-placement talks, group discussions and personal interviews are coordinated by members of the committee.</p>
                </div>
            </div>
        </div>

        <!-- Contact Details -->
        <div class="contact-section">
            <h3>Contact Details</h3>
            <div class="contact-grid">
                <div class="contact-item">
                    <strong>zswdct@ng</strong>
                    <span>acdtyb@dtu.ac.in</span><br>
                    <span>23554254</span>
                </div>
                <div class="contact-item">
                    <strong>zswdct@ng</strong>
                    <span>acdtyb@dtu.ac.in</span><br>
                    <span>23554254</span>
                </div>
                <div class="contact-item">
                    <strong>zswdct@ng</strong>
                    <span>acdtyb@dtu.ac.in</span><br>
                    <span>23554254</span>
                </div>
            </div>
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
                    <li><a href="#">• Gallery</a></li>
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
</body>
</html>
