<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Life at DSM - Delhi School of Management</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .page-title {
            font-family: 'Merriweather', serif;
            font-size: 32px;
            color: #6c5ce7;
            font-weight: 700;
        }

        .month-selector {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .month-dropdown {
            padding: 10px 20px;
            border: 2px solid #3498db;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            min-width: 200px;
            cursor: pointer;
            background: white;
        }

        .calendar-icon {
            font-size: 50px;
            color: #3498db;
        }

        /* Month Banner */
        .month-banner {
            background: linear-gradient(135deg, #5dade2, #3498db);
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .month-banner h2 {
            font-size: 28px;
            color: white;
            font-weight: 700;
        }

        /* Events Grid */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        .event-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .event-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .event-title {
            padding: 20px;
            text-align: center;
            font-size: 16px;
            color: #2c3e50;
            font-weight: 600;
        }

        /* footer css handled by footer.php */

        .footer-bottom {
            background: #e67e22;
            padding: 10px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .events-grid {
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

            .page-header {
                flex-direction: column;
                gap: 20px;
            }

            .events-grid {
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
        <!-- Page Header with Month Selector -->
        <div class="page-header">
            <h1 class="page-title">STUDENT LIFE AT DSM</h1>
            <div class="month-selector">
                <select class="month-dropdown" id="monthSelect" onchange="updateMonth()">
                    <option value="">Select Month</option>
                    <option value="January 2025">January 2025</option>
                    <option value="February 2025">February 2025</option>
                    <option value="March 2025">March 2025</option>
                    <option value="April 2025">April 2025</option>
                    <option value="May 2025">May 2025</option>
                    <option value="June 2025">June 2025</option>
                    <option value="July 2025">July 2025</option>
                    <option value="August 2025">August 2025</option>
                    <option value="September 2025">September 2025</option>
                    <option value="October 2025">October 2025</option>
                    <option value="November 2025">November 2025</option>
                    <option value="December 2025">December 2025</option>
                </select>
                <div class="calendar-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </div>
        </div>

        <!-- Month Banner -->
        <div class="month-banner">
            <h2 id="monthDisplay">MONTH, YEAR</h2>
        </div>

        <!-- Events Grid -->
        <div class="events-grid">
            <!-- Industrial Visit -->
            <div class="event-card">
                <div class="event-image">
                    <img src="images/student_life/industrial_visit.png" alt="Industrial Visit">
                </div>
                <div class="event-title">Industrial Visit</div>
            </div>

            <!-- Workshop/Guest Lecture -->
            <div class="event-card">
                <div class="event-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #95a5a6, #7f8c8d); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-chalkboard-teacher" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="event-title">Workshop/Guest Lecture</div>
            </div>

            <!-- Cultural Event -->
            <div class="event-card">
                <div class="event-image">
                    <img src="images/student_life/cultural_event.png" alt="Cultural Event">
                </div>
                <div class="event-title">Cultural Event</div>
            </div>

            <!-- Sports Event -->
            <div class="event-card">
                <div class="event-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #16a085, #27ae60); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-running" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="event-title">Sports Event</div>
            </div>

            <!-- Additional Events -->
            <div class="event-card">
                <div class="event-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #8e44ad, #9b59b6); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-theater-masks" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="event-title">Annual Fest</div>
            </div>

            <div class="event-card">
                <div class="event-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #e74c3c, #c0392b); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-users" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="event-title">Club Activities</div>
            </div>

            <div class="event-card" onclick="window.location.href='student_profile.php'">
                <div class="event-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #f39c12, #e67e22); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-user-graduate" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="event-title">Student Profile</div>
            </div>

            <div class="event-card" onclick="window.location.href='faculty.php'">
                <div class="event-image">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #3498db, #2980b9); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-chalkboard-teacher" style="font-size: 60px; color: white;"></i>
                    </div>
                </div>
                <div class="event-title">Faculty Page</div>
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

        function updateMonth() {
            const select = document.getElementById('monthSelect');
            const display = document.getElementById('monthDisplay');
            const selectedValue = select.value;
            
            if (selectedValue) {
                display.textContent = selectedValue.toUpperCase();
            } else {
                display.textContent = 'MONTH, YEAR';
            }
        }
    </script>
</body>
</html>
