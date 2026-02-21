<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delhi School of Management - DTU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', Arial, sans-serif;
            background: linear-gradient(to bottom, #f8f9fa 0%, #e9ecef 100%);
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

        .logo-placeholder {
            width: 80px;
            height: 80px;
        }

        .university-info h1 {
            font-size: 20px;
            color: #c0392b;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .university-info h2 {
            font-size: 16px;
            color: #2980b9;
            font-weight: 600;
            margin-bottom: 5px;
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

        /* Hero Slider */
        .hero-slider {
            position: relative;
            width: 100%;
            height: 550px; /* Increased height for better visibility */
            overflow: hidden;
            background: #111;
        }

        .slider-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
            image-rendering: -webkit-optimize-contrast; 
        }

        .slider-image.active {
            opacity: 1;
        }

        .slider-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.4) 100%);
            pointer-events: none;
            z-index: 2;
        }

        .slider-nav {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 10;
        }

        .slider-btn {
            background: rgba(255,255,255,0.7);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
            transition: all 0.3s;
        }

        .slider-btn:hover {
            background: white;
            color: #e67e22;
        }

        /* Notice and Focus Section */
        .notice-focus-section {
            max-width: 1200px;
            margin: -50px auto 40px;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            position: relative;
            z-index: 10;
        }

        .notice-card, .focus-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .notice-card:hover, .focus-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.18);
        }

        .notice-card {
            border: 3px solid #3498db;
            border-top: 5px solid #3498db;
        }

        .focus-card {
            border-top: 5px solid #e67e22;
        }

        .notice-card h2, .focus-card h2 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .notice-card ul, .focus-card ul {
            list-style: none;
        }

        .notice-card li, .focus-card li {
            padding: 12px 0 12px 25px;
            border-bottom: 1px solid #ecf0f1;
            font-size: 14px;
            color: #34495e;
            line-height: 1.6;
            position: relative;
        }

        .notice-card li:before, .focus-card li:before {
            content: "▸";
            position: absolute;
            left: 0;
            color: #3498db;
            font-weight: bold;
        }

        .notice-card li:last-child, .focus-card li:last-child {
            border-bottom: none;
        }

        .read-more {
            text-align: right;
            margin-top: 20px;
        }

        .read-more a {
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .read-more a:hover {
            color: #2980b9;
            text-decoration: underline;
        }

        /* Welcome Section */
        .welcome-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
            border-left: 5px solid #3498db;
        }

        .welcome-header {
            display: flex;
            gap: 30px;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .hod-image {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #3498db;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }

        .welcome-text h3 {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.4;
        }

        .welcome-text p {
            font-size: 15px;
            line-height: 1.9;
            color: #555;
            text-align: justify;
            margin-bottom: 12px;
        }

        .hod-signature {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-left: 4px solid #3498db;
            font-weight: 600;
            color: #2c3e50;
            line-height: 1.6;
        }

        /* Recent Events Section */
        .events-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #3498db, #e67e22);
            border-radius: 2px;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .event-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            display: flex;
            gap: 15px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 3px solid #3498db;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .event-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
            border: 2px solid #ecf0f1;
        }

        .event-content p {
            font-size: 13px;
            line-height: 1.7;
            color: #555;
            text-align: justify;
        }

        /* Leaders Section */
        .leaders-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .leaders-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .leader-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid #e67e22;
        }

        .leader-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .leader-image {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
            border: 3px solid #e67e22;
            box-shadow: 0 3px 10px rgba(230, 126, 34, 0.3);
        }

        .leader-info h4 {
            font-size: 17px;
            color: #2c3e50;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .leader-info p {
            font-size: 13px;
            line-height: 1.7;
            color: #555;
        }

        /* footer css removed, now handled by footer.php */

        /* Responsive */
        @media (max-width: 992px) {
            .notice-focus-section {
                grid-template-columns: 1fr;
            }

            .events-grid, .leaders-grid {
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

            .events-grid, .leaders-grid {
                grid-template-columns: 1fr;
            }

            .welcome-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="top-header">
        <div class="logo-section">
            <div class="logo-placeholder">
                <img src="images/logos/dtu_logo.png" alt="DTU Logo" style="width: 80px; height: 80px; border-radius: 50%;">
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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="admission_dtu.php">Admission</a></li>
            <li><a href="placements.php">Placements</a></li>
            <li><a href="student_life.php">Student Corner</a></li>
            <li><a href="https://hostels.dtu.ac.in/" target="_blank">Hostel</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </nav>

    <!-- Hero Slider -->
    <div class="hero-slider">
        <img src="images/portal/first.jpg" alt="DTU Campus" class="slider-image active">
        <img src="images/portal/second.jpg" alt="DTU Infrastructure" class="slider-image">
        <img src="images/portal/third.jpg" alt="Students at DTU" class="slider-image">
        <img src="images/portal/fourth.jpg" alt="DSM DTU Campus" class="slider-image">
        <div class="slider-overlay"></div>
        <div class="slider-nav">
            <div class="slider-btn prev-btn"><i class="fas fa-chevron-left"></i></div>
            <div class="slider-btn next-btn"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>

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

        // Slider Functionality
        const images = document.querySelectorAll('.slider-image');
        let currentIdx = 0;

        function showNext() {
            images[currentIdx].classList.remove('active');
            currentIdx = (currentIdx + 1) % images.length;
            images[currentIdx].classList.add('active');
        }

        function showPrev() {
            images[currentIdx].classList.remove('active');
            currentIdx = (currentIdx - 1 + images.length) % images.length;
            images[currentIdx].classList.add('active');
        }

        let slideInterval = setInterval(showNext, 5000);

        document.querySelector('.next-btn').addEventListener('click', () => {
            clearInterval(slideInterval);
            showNext();
            slideInterval = setInterval(showNext, 5000);
        });

        document.querySelector('.prev-btn').addEventListener('click', () => {
            clearInterval(slideInterval);
            showPrev();
            slideInterval = setInterval(showNext, 5000);
        });
    </script>

    <!-- Notice Board and Focus Section -->
    <div class="notice-focus-section">
        <div class="notice-card">
            <h2>NOTICE BOARD</h2>
            <ul>
                <li>Holidays from 20.12.2025 to 31.12.2025</li>
                <li>Semester Registration from 16.12.2025 to 20.12.2025</li>
                <li>Summer Internship Evaluation during 08.12.2025 to 12.12.2025</li>
            </ul>
            <div class="read-more">
                <a href="#">Read More</a>
            </div>
        </div>

        <div class="focus-card">
            <h2>FOCUS</h2>
            <ul>
                <li>Result to be announced on 22.12.2025</li>
                <li>Notice regarding no change of End Term Examination scheduled on 25.11.2025</li>
                <li>Seating Plan for End Term Examination, November- December, 2025</li>
                <li>Final Date sheet of End Term Examination, Nov-Dec 2025</li>
            </ul>
            <div class="read-more">
                <a href="#">Read More</a>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-header">
            <img src="images/home/hod_photo.png" alt="Dr. Saurabh Agrawal - HOD" class="hod-image">
            <div class="welcome-text">
                <h3>Welcome to Delhi School of Management, Delhi Technological University</h3>
                <p>DSM is committed to delivering high-quality management education through a strong blend of academics, industry engagement, and research excellence.</p>
                <p><strong>Established in 2009</strong>, DSM aligns with DTU's vision of becoming a world-class university through education, innovation, and research. The school offers <strong>Full-Time MBA, Weekend MBA (Executive), and Ph.D. programmes in Management</strong>, supported by an industry-connected curriculum and active alumni network.</p>
                <p>Our experienced faculty bring leadership, research, and real-world insights into the classroom, while students gain hands-on exposure through case studies, live projects, internships, and innovation initiatives. At DSM, we prepare students to become responsible leaders equipped to meet the challenges of modern business and society.</p>
                <div class="hod-signature">
                    <strong>Dr. Saurabh Agrawal</strong><br>
                    Head of Department<br>
                    Delhi School of Management, DTU
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Events Section -->
    <div class="events-section">
        <h2 class="section-title">RECENT EVENTS</h2>
        <div class="events-grid">
            <div class="event-card">
                <img src="images/home/event1.png" alt="Event" class="event-image">
                <div class="event-content">
                    <p>Delhi School of Management organized an enlightening guest lecture on 'AI in Business' by Commissioner, Income Tax Department. The session explored how Artificial Intelligence is transforming business operations.</p>
                </div>
            </div>

            <div class="event-card">
                <img src="images/home/event2.png" alt="Event" class="event-image">
                <div class="event-content">
                    <p>The Delhi School of Management, Delhi Technological University, successfully organized an insightful guest lecture on the topic 'FMCG Product Management' by Mr. Sarthak Mahajan, Product Planning and Development, V-Guard.</p>
                </div>
            </div>

            <div class="event-card">
                <img src="images/home/event3.png" alt="Event" class="event-image">
                <div class="event-content">
                    <p>Delhi School of Management, DTU, recently had the privilege of hosting an insightful expert lecture on the topic 'Decoding the Evolving Landscape of Indian Markets.' We were honored to have the esteemed Dr. Rajeev Lath, a GBI Smart Trainer, as our speaker.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Learners to Leaders Section -->
    <div class="leaders-section">
        <h2 class="section-title">LEARNERS TO LEADERS</h2>
        <div class="leaders-grid">
            <div class="leader-card">
                <img src="images/home/leader1.png" alt="Leader" class="leader-image">
                <div class="leader-info">
                    <h4>Prof Prateek Sharma</h4>
                    <p>Prof Prateek Sharma received his Ph. D. degree in Environmental Engineering from Department of Civil Engineering, Indian Institute of Technology, New Delhi. He is currently working as Associate Professor in Engineering Department, Delhi College of Engineering, Delhi.</p>
                </div>
            </div>

            <div class="leader-card">
                <img src="images/home/pawan.png" alt="Leader" class="leader-image">
                <div class="leader-info">
                    <h4>Pawan Kumar Sharma</h4>
                    <p>Pawan Kumar Sharma is among the few or may be the only one to have done his graduation, post graduation and even doctorate from the same institution. He was selected for the prestigious and highly coveted Indian Administrative Services (IAS).</p>
                </div>
            </div>

            <div class="leader-card">
                <img src="images/home/leader2.png" alt="Leader" class="leader-image">
                <div class="leader-info">
                    <h4>Dr Vinod Mehra</h4>
                    <p>Dr Vinod Mehra received his B. Tech degree in Mech Engg in 1969 and joined DCE as faculty in the year 1972. He served as Head of Mechanical Engineering Department and was sabbatical by DCE. He later on took over as a Professor and retired in 2006.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
