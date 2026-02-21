<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Delhi School of Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', Arial, sans-serif;
            background-color: #f8f9fa;
            min-height: 100vh;
            color: #333;
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
            font-size: 20px;
            color: #c0392b;
            font-weight: 700;
        }

        .university-info h2 {
            font-size: 16px;
            color: #2980b9;
            font-weight: 600;
        }

        .university-info p {
            font-size: 13px;
            color: #555;
            line-height: 1.5;
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

        .apply-now-btn {
            background: #e67e22;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.3s;
            border: 2px solid #e67e22;
        }

        .apply-now-btn:hover {
            background: white;
            color: #e67e22;
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
            padding: 50px 20px;
        }

        .page-title {
            text-align: center;
            font-family: 'Merriweather', serif;
            font-size: 42px;
            color: #3498db;
            margin-bottom: 60px;
            font-weight: 900;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        /* Content Sections */
        .content-section {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 80px;
        }

        .content-section.reverse {
            flex-direction: row-reverse;
        }

        .section-image {
            flex: 1;
            max-width: 450px;
        }

        .section-image img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .image-placeholder {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #bdc3c7, #95a5a6);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 60px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .section-text {
            flex: 1;
        }

        .section-text p {
            font-size: 17px;
            line-height: 1.9;
            color: #333;
            text-align: justify;
            letter-spacing: 0.3px;
        }

        /* Rotated Images */
        .rotated-left {
            transform: none;
        }

        .rotated-right {
            transform: none;
        }

        /* footer css removed, now handled by footer.php */

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
            .content-section {
                flex-direction: column;
                gap: 30px;
            }
            
            .content-section.reverse {
                flex-direction: column;
            }
            
            .section-image {
                max-width: 100%;
            }
            
            .rotated-left, .rotated-right {
                transform: none;
            }
            
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
                letter-spacing: 2px;
            }
            
            .section-text p {
                font-size: 15px;
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
            <li><a href="about.php" class="active">About Us</a></li>
            <li><a href="admission_dtu.php">Admission</a></li>
            <li><a href="placements.php">Placements</a></li>
            <li><a href="student_life.php">Student Corner</a></li>
            <li><a href="https://hostels.dtu.ac.in/" target="_blank">Hostel</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="page-container">
        <h1 class="page-title">About Us</h1>

        <!-- Section 1 -->
        <div class="content-section">
            <div class="section-image rotated-left">
                <img src="images/about/dtuu.jpg" alt="Delhi School of Management">
            </div>
            <div class="section-text">
                <p>Delhi School of Management (DSM), established in 2009 after Delhi College of Engineering became Delhi Technological University (DTU), aims to develop socially responsible, ethical, and innovative managers. Building on DTU's seven-decade legacy, DSM emphasizes innovation, research, and problem-solving by integrating technical and managerial skills. Through its Triple E approach—Education, Experience, and Exposure—DSM prepares students for a knowledge-driven environment and strives to provide quality management education while contributing to an inclusive knowledge society.</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="content-section reverse">
            <div class="section-image rotated-right">
                <img src="images/about/dtu.jpg" alt="DSM Classroom">
            </div>
            <div class="section-text">
                <p>The curriculum is designed to meet the requirement of the present-day technology-intensive business functions. The students are equipped with management knowledge to deal with the complex global and dynamic business environment. Internships and field projects are an integral part of the curriculum. DSM also encourages students to form committees/forums which undertake different activities.</p>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="content-section">
            <div class="section-image rotated-left">
                <img src="images/about/dtuuu.jpg" alt="DTU Campus">
            </div>
            <div class="section-text">
                <p>The emphasis is on the right combination of classroom learning, hands-on experience in the corporate world and sharing the rich experience of the practitioners. In order to provide students with the required exposure, DSM brings them in close contact with the industry executives and eminent academicians through a series of lectures, sponsoring students to conferences and seminars, and facilitating their participation in papers/ case studies competitions. Overall DSM aims to develop and inculcate knowledge, skills and right attitude with responsibility, commitment, professionalism, moral & ethical standards amongst the students.</p>
            </div>
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
