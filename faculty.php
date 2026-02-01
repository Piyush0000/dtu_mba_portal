<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty at DSM - Delhi School of Management</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            text-align: center;
            font-family: 'Merriweather', serif;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 40px;
            font-weight: 700;
        }

        /* Faculty Grid */
        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .faculty-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border: 3px solid #5dade2;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
            padding: 15px;
            gap: 15px;
        }

        .faculty-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .faculty-image {
            width: 120px;
            height: 120px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
            position: relative;
        }

        .faculty-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .faculty-image-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #bdc3c7, #95a5a6);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 40px;
        }

        .faculty-info {
            flex: 1;
        }

        .faculty-info h3 {
            font-size: 16px;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .faculty-info .designation {
            font-size: 14px;
            color: #555;
            margin-bottom: 3px;
        }

        .faculty-info .qualification {
            font-size: 13px;
            color: #7f8c8d;
            margin-bottom: 5px;
        }

        .faculty-info .specialization {
            font-size: 12px;
            color: #555;
            line-height: 1.5;
            margin-top: 5px;
        }

        .faculty-info .specialization strong {
            color: #3498db;
        }

        .faculty-link {
            color: #3498db;
            font-size: 20px;
            padding: 10px;
            transition: color 0.3s;
        }

        .faculty-link:hover {
            color: #e67e22;
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
            text-align: center;
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
            .faculty-grid {
                grid-template-columns: repeat(2, 1fr);
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
            
            .faculty-grid {
                grid-template-columns: 1fr;
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
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="page-container">
        <h1 class="page-title">Faculty at DSM</h1>

        <div class="faculty-grid">
            <?php
            // Faculty data with photos
            $faculty = [
                // Head of Department
                ['name' => 'Dr. Saurabh Agrawal', 'designation' => 'Associate Professor & Head of Department', 'qualification' => 'B.E. (UOR, Roorkee), M. Tech. (IIT, Delhi), MBA (OSU, USA), PhD (DTU, Delhi), Ph.D', 'specialization' => 'Supply Chain Management, Reverse Logistics, Industrial Engineering, Data Analytics', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=saurabh', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/saurabh.jpg'],
                
                // Professors
                ['name' => 'Prof. Pradeep Kumar Suri', 'designation' => 'Professor', 'qualification' => 'M.Tech, Ph.D', 'specialization' => 'E-Governance, Project Management, Quantitative Methods', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=pksuri', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/pradeepksuri.jpg'],
                ['name' => 'Prof. Rajan Yadav', 'designation' => 'Professor', 'qualification' => 'MBA, Ph.D', 'specialization' => 'Services Marketing, Sales and Distribution Management, Rural Marketing, Social Marketing, Retail Management', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=rajanyadav', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/rajanyadav.jpg'],
                ['name' => 'Prof. Girish Chandra Maheshwari', 'designation' => 'Professor', 'qualification' => 'Ph.D', 'specialization' => 'Finance, Accounting and Strategy Area', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=gcmaheshwari', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/gcmaheshwari.jpg'],
                ['name' => 'Prof. Neeraj Sharma', 'designation' => 'Adjunct Professor', 'qualification' => 'M Tech (IIT Kharagpur), PhD (IIT Delhi)', 'specialization' => 'Strategic Management, Human Resource Management, Organizational Behavior, Indian Knowledge Systems', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=neerajsharma', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/neerajsharma.jpg'],
                
                // Associate Professors
                ['name' => 'Dr. Archana Singh', 'designation' => 'Associate Professor', 'qualification' => 'MBA (Finance), Ph.D', 'specialization' => 'Corporate Finance, Financial Accounting, Security Analysis', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=archanasingh1', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/archanasingh.jpg'],
                ['name' => 'Dr. Shikha N Khera', 'designation' => 'Associate Professor', 'qualification' => 'MBA, NET, Ph.D', 'specialization' => 'Organisational Behaviour, Organizational Development', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=shikhankhera', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/shikhankhera1.jpg'],
                ['name' => 'Dr. Vikas Gupta', 'designation' => 'Associate Professor', 'qualification' => 'MBA, NET, Ph.D', 'specialization' => 'Knowledge Management, Innovation Management, Business Process Re-engineering, Corporate Social Responsibility', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=vikasgupta', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/vikasgupta.jpg'],
                
                // Assistant Professors
                ['name' => 'Dr. Abhinav Chaudhary', 'designation' => 'Assistant Professor', 'qualification' => 'B.E., MBA, NET (UGC), Ph.D', 'specialization' => 'International Marketing Management, Marketing of Services, Consumer Behaviour, Customer Relationship Management, Knowledge Management', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=abhinavchaudhary', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/abhinavchaudhary.jpg'],
                ['name' => 'Dr. Deepali Malhotra', 'designation' => 'Assistant Professor', 'qualification' => 'M.Com., M. Phil, NET-JRF, Ph.D', 'specialization' => 'Strategy Management, International Business, Finance', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=deepali', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/deepali.jpg'],
                ['name' => 'Dr. Deep Shree', 'designation' => 'Assistant Professor', 'qualification' => 'B.A. (Hons.) – Economics, MBA, NET-JRF, Ph.D', 'specialization' => 'Marketing, Not for Profit Marketing, Brand Management, Qualitative Research', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=deepshree', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/deepshree.jpg'],
                ['name' => 'Dr. Mohit Beniwal', 'designation' => 'Assistant Professor', 'qualification' => 'B. E., MS in Information Systems, MBA, Ph.D', 'specialization' => 'Information Systems, Finance', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=mohitbeniwal', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/mohit.jpg'],
                ['name' => 'Mr. Yashdeep Singh', 'designation' => 'Assistant Professor', 'qualification' => 'B.E., MBA, NET', 'specialization' => 'Marketing Management, Information Technology Management', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=yashdeep', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/yashdeep.jpg'],
                ['name' => 'Mr. Dhiraj Kumar Pal', 'designation' => 'Assistant Professor', 'qualification' => 'B.E, PGDM', 'specialization' => 'Marketing, Operations & SCM, Strategy', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=dheeraj', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/dheeraj.jpg'],
                ['name' => 'Dr. Kusum Lata', 'designation' => 'Assistant Professor', 'qualification' => 'B.Tech (CSE), M.E (CTA), Ph.D (CSE)', 'specialization' => 'Data Mining, Machine Learning, Information Systems, Database Management Systems, Software Engineering', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=kusumlata', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/kusumlata.jpg'],
                ['name' => 'Dr. Gaganmeet Kaur Awal', 'designation' => 'Assistant Professor', 'qualification' => 'B.Tech (CS), M.Tech (CS), Ph.D', 'specialization' => 'Machine Learning, Data Mining and DBMS, Web Analytics', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=gaganmeetkaurawal', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/gaganmeetkaurawal.jpg'],
                ['name' => 'Dr. Meenakshi Ahlawat', 'designation' => 'Assistant Professor', 'qualification' => 'Ph.D', 'specialization' => '', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=meenakshiahlawat', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/meenakshiahlawat.jpg'],
                ['name' => 'Ms. Renuka Prasad', 'designation' => 'Assistant Professor', 'qualification' => 'B.Com (Hons.), M.Com, Ph.D. (Final Stage)', 'specialization' => 'Financial Accounting, Financial Reporting and analysis, cost accounting, management accounting, corporate laws, financial management, and sustainability', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=renukaprasad', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/renukaprasad.jpg'],
                ['name' => 'Dr. Shelly Gupta', 'designation' => 'Assistant Professor', 'qualification' => 'B.Com (Hons.), M.Com, Ph.D.', 'specialization' => 'Information System Adoption, Financial Inclusion, Consumer Behaviour, Mobile Financial Services', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=shellygupta', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/shellygupta.jpg'],
                ['name' => 'Dr. Prama Vishnoi', 'designation' => 'Assistant Professor', 'qualification' => 'B.Com (Hons.), M.Com, Ph.D.', 'specialization' => 'Bottom of the Pyramid (BoP) Markets, Consumer Behaviour, Subsistence Marketplaces', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=pramavishnoi', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/pramavishnoi.jpg'],
                ['name' => 'Dr. Veenu Shankar', 'designation' => 'Assistant Professor', 'qualification' => 'B.Com (Hons.), MBA, Ph.D.', 'specialization' => 'Environmental Responsibility, Green Behavior, Institutional Theory, Green Human Resource Management, Green Leadership, Business Ethics, CSR, CER, Sustainability', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=veenushankar', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/veenushankar.jpg'],
                ['name' => 'Dr. Arushi Jain', 'designation' => 'Assistant Professor', 'qualification' => 'B.Com (Hons.), M.Com, MA (Eco), Ph.D.', 'specialization' => 'Economics, Financial Management, Banking & Credit Risk, Systemic Risk, Economics, Corporate Finance, Financial Accounting, Cost accounting and Management accounting', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=arushijain', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/arushijain.jpg'],
                ['name' => 'Dr. Yogesh Sharma', 'designation' => 'Assistant Professor', 'qualification' => 'BBS (SSCBS, DU), MBA (JMI), Ph.D. (JNU), JRF, SRF, UGC NET (Management and Commerce)', 'specialization' => 'Marketing, Subscription, Servitization, Green Marketing, Sustainability, AI, Data Analytics, Neural Networks, BRICS', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=yogeshsharma', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/yogeshsharma.jpg'],
                ['name' => 'Dr. Rakesh Kumar Malviya', 'designation' => 'Assistant Professor', 'qualification' => 'B.E. (Mech. Engg.), M.E. (Industrial Engg. & Mgmt), Ph.D (SVNIT Surat)', 'specialization' => 'Supply Chain Management, Green SCM, Sustainable SCM, Digital SCM, Green Manufacturing, Reverse Logistics, Industry 4.0/5.0, Digitalization concepts, Sustainability etc.', 'profile_link' => 'https://dtu.ac.in/modules/faculty_profile_new/faculty_index.php?uname=rakeshkumarmalviya', 'photo' => 'https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/rakeshkumarmalviya.jpg'],
            ];

            foreach ($faculty as $member): ?>
            <div class="faculty-card">
                <div class="faculty-image">
                    <?php if (!empty($member['photo'])): ?>
                        <img src="<?php echo htmlspecialchars($member['photo']); ?>" 
                             alt="<?php echo htmlspecialchars($member['name']); ?>"
                             loading="lazy">
                    <?php else: ?>
                        <div class="faculty-image-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="faculty-info">
                    <h3><?php echo htmlspecialchars($member['name']); ?></h3>
                    <p class="designation"><?php echo htmlspecialchars($member['designation']); ?></p>
                    <p class="qualification"><?php echo htmlspecialchars($member['qualification']); ?></p>
                    <?php if (!empty($member['specialization'])): ?>
                    <p class="specialization"><strong>Specialization:</strong> <?php echo htmlspecialchars($member['specialization']); ?></p>
                    <?php endif; ?>
                </div>
                <a href="<?php echo htmlspecialchars($member['profile_link']); ?>" target="_blank" class="faculty-link" title="View Profile">
                    <i class="fas fa-link"></i>
                </a>
            </div>
            <?php endforeach; ?>
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
                <p>© 2014 - 2021, Delhi Technological University, Shahbad Daulatpur, Main Bawana Road, DL - 42, IN</p>
            </div>
        </div>
    </footer>
    <div class="footer-bottom"></div>
</body>
</html>
