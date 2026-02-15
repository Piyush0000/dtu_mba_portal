<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission - Delhi School of Management, DTU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', Arial, sans-serif;
            background-color: #f8f9fa;
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
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #8b0000 0%, #c0392b 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 10px;
            text-align: center;
            border: 3px solid #8b0000;
        }

        .university-info h1 {
            font-size: 20px;
            color: #8b0000;
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
            width: 120px;
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
            gap: 3px;
        }

        .social-icons a {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-size: 20px;
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
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
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
            z-index: 999;
        }

        .nav-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 100%;
            padding: 0 20px;
        }

        .main-nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 10px 0;
        }

        .apply-btn-container {
            padding: 10px 0;
        }

        .main-nav li {
            position: relative;
        }

        .main-nav a {
            display: block;
            padding: 12px 30px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s;
            background: #e67e22;
            margin: 8px 5px;
            border-radius: 4px;
        }

        .main-nav a:hover, .main-nav a.active {
            background: #d35400;
        }

        /* Main Layout */
        .main-container {
            display: flex;
            margin-top: 0;
            min-height: calc(100vh - 200px);
        }

        /* Fixed Sidebar */
        .sidebar {
            width: 280px;
            background: #f0f0f0;
            position: sticky;
            top: 20px;
            height: calc(100vh - 40px);
            overflow-y: auto;
            border-right: 1px solid #ddd;
            z-index: 100;
        }

        .sidebar-header {
            background: linear-gradient(135deg, #5dade2, #85c1e9);
            color: #2c3e50;
            padding: 15px;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            border-bottom: 2px solid #3498db;
        }

        .course-list {
            padding: 15px;
        }

        .course-card {
            background: white;
            border-radius: 8px;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s;
            border: 3px solid transparent;
        }

        .course-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .course-card.active {
            border-color: #3498db;
            background: #e8f4fc;
        }

        .course-image {
            width: 100%;
            height: 120px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            position: relative;
            image-rendering: -webkit-optimize-contrast;
        }

        .course-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
        }

        .course-image i {
            position: relative;
            z-index: 1;
        }

        .course-card[data-course="mba-general"] .course-image { background-image: url('images/mba/geneeral.jpg'); }
        .course-card[data-course="mba-ba"] .course-image { background-image: url('images/mba/ba.png'); }
        .course-card[data-course="mba-iev"] .course-image { background-image: url('images/mba/iev.png'); }
        .course-card[data-course="executive-mba"] .course-image { background-image: url('images/mba/executive.jpg'); }

        .course-card.active .course-image {
            background: linear-gradient(135deg, #3498db, #5dade2);
        }

        .course-title {
            padding: 12px;
            font-size: 14px;
            font-weight: 700;
            color: #2c3e50;
            text-align: center;
        }

        /* Scrollable Content Area */
        .content-area {
            margin-left: 280px;
            flex: 1;
            padding: 25px;
            overflow-y: auto;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        /* Content Cards */
        .info-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #5dade2, #85c1e9);
            color: #2c3e50;
            padding: 15px 20px;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
        }

        .card-content {
            padding: 20px;
            font-size: 13px;
            line-height: 1.8;
            color: #333;
        }

        .card-content p {
            margin-bottom: 15px;
            text-align: justify;
        }

        .card-content ol, .card-content ul {
            padding-left: 25px;
            margin-bottom: 15px;
        }

        .card-content li {
            margin-bottom: 10px;
        }

        .card-content .note {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 10px 15px;
            margin-top: 15px;
            font-size: 12px;
        }

        /* Brochure Section */
        .brochure-section {
            margin-bottom: 25px;
        }

        .brochure-header {
            background: #0988c4;
            color: white;
            padding: 10px;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
        }

        .brochure-years {
            background: white;
            padding: 15px 20px;
            display: flex;
            gap: 30px;
            border: 1px solid #ddd;
            border-top: none;
        }

        .year-link {
            color: #2980b9;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .year-link:hover {
            text-decoration: underline;
        }

        /* Apply Button */
        .apply-section {
            text-align: center;
            padding: 30px;
            border-top: 1px solid #ddd;
            margin-bottom: 25px;
        }

        .apply-btn-main {
            background: #052963;
            color: white;
            padding: 15px 50px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.3s;
        }

        .apply-btn-main:hover {
            background: #0a3d8f;
        }

        /* FAQ Section */
        .faq-section {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }

        .faq-header {
            background: #f8f9fa;
            padding: 15px 20px;
            font-size: 16px;
            font-weight: 700;
            color: #2c3e50;
            border-bottom: 1px solid #ddd;
        }

        .faq-item {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            transition: background 0.3s;
        }

        .faq-item:hover {
            background: #f8f9fa;
        }

        .faq-item i {
            color: #666;
            transition: transform 0.3s;
        }

        .faq-item.open i {
            transform: rotate(180deg);
        }

        .faq-answer {
            display: none;
            padding: 15px 20px;
            background: #f8f9fa;
            border-bottom: 1px solid #eee;
            font-size: 13px;
            line-height: 1.6;
        }

        .faq-answer.show {
            display: block;
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            padding: 20px 40px;
            margin-left: 280px;
            border-top: 5px solid #e67e22;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .footer-section h4 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #e67e22;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 5px;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .footer-section a:hover {
            color: #e67e22;
        }

        .footer-section p {
            font-size: 15px;
            line-height: 1.6;
        }

        .footer-bottom {
            background: #e67e22;
            padding: 8px;
            margin-left: 280px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 220px;
            }
            
            .content-area, .footer, .footer-bottom {
                margin-left: 220px;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .top-header {
                flex-direction: column;
                gap: 10px;
                padding: 10px 15px;
            }
            
            .main-nav {
                top: 0;
            }
            
            .nav-container {
                flex-direction: column;
                gap: 10px;
            }
            
            .main-nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .main-nav a {
                padding: 8px 15px;
                font-size: 12px;
            }
            
            .main-container {
                margin-top: 250px;
            }
            
            .sidebar {
                width: 100%;
                position: relative;
                top: 0;
            }
            
            .content-area, .footer, .footer-bottom {
                margin-left: 0;
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
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100065103819173" class="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/dtu_delhi" class="twitter" target="_blank"><i class="fab fa-x-twitter"></i></a>
                <a href="https://www.linkedin.com/in/delhi-technological-university-delhi-397129209/" class="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/dtu.delhi/" class="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="main-nav">
        <div class="nav-container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="admission_dtu.php" class="active">Admission</a></li>
                <li><a href="placements.php">Placements</a></li>
                <li><a href="student_life.php">Student Corner</a></li>
                <li><a href="https://hostels.dtu.ac.in/" target="_blank">Hostel</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Fixed Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">COURSES OFFERED</div>
            <div class="course-list">
                <div class="course-card active" data-course="mba-general">
                    <div class="course-image">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="course-title">MBA General</div>
                </div>
                <div class="course-card" data-course="mba-ba">
                    <div class="course-image">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="course-title">MBA-BA</div>
                </div>
                <div class="course-card" data-course="mba-iev">
                    <div class="course-image">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="course-title">MBA-IEV</div>
                </div>
                <div class="course-card" data-course="executive-mba">
                    <div class="course-image">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="course-title">Executive MBA</div>
                </div>
            </div>
        </aside>

        <!-- Scrollable Content Area -->
        <main class="content-area">
            <!-- MBA General Content -->
                <div class="apply-section" style="margin-bottom: 20px;">
                    <button class="apply-btn-main" onclick="window.open('https://www.cmacadmissions.com/', '_blank')">Apply for MBA General</button>
                </div>
                <div class="info-card">
                    <div class="card-header">Master of Business Administration (FULL TIME) at DSM,DTU</div>
                    <div class="card-content">
                        <p>The MBA Programme (Full time) is a two-year full time professional programme spread over four semesters, which combines rigorous academic schedules focused on foundations of management in the first year, and skill based functional area electives such as Finance, HR, Marketing, IT, and Operations/Supply Chain, along with courses in analytics and data mining etc. There is a strong practice orientation, along with multiple opportunities for industry interaction, through live projects, workshop, professional and liberal arts clubs, and a full Campus life. It facilitates development of new perspectives and a higher level of knowledge and understanding as a management professional. Academic curricula are so devised that a student of one discipline can take some courses of other disciplines offering choice based credit system (CBCS).</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ELIGIBILITY CRITERIA</div>
                    <div class="card-content">
                        <ol>
                            <li>A candidate who has passed any bachelor's degree examination with minimum 60% marks in aggregate or equivalent CGPA from a recognized university/institution and valid CAT-2021 /MAT- 2021 /MAT-2022 percentile or Graduation degree with one year experience is eligible to apply. However, a relaxation of 10% in marks shall be given in eligibility criteria to SC/ST/PwD candidates.</li>
                            <li>The Vacant seats/ those in degree from any of the universities incorporated by an act of the central or state legislature in India, or other educational institutions established by an Act of Parliament or declared to be deemed as a university under section 3 of UGC Act, 1956, or possess an equivalent qualification recognized by the Ministry of Education, Government of India.</li>
                            <li>Those who are appearing in final semester examination may also apply, if they submit:
                                <ul>
                                    <li>The proof of eligibility by a specific date declared by the University, and</li>
                                    <li>Valid CAT/MAT percentile at the time of application</li>
                                    <li>Candidates appearing in final semester/year should have at least 60% aggregate marks at the time of submission of application in case the conversion formula for CGPA is not provided by the concerned Institute/University, the equivalent percentage shall be computed as per following formula: CGPA × 10 = Percentage of Marks</li>
                                </ul>
                            </li>
                        </ol>
                        <div class="note">
                            <strong>Note:</strong> At any stage of the programme, if it is found that the candidate does not fulfil the eligibility criteria, his/ her admission shall be cancelled, and fee shall not be refunded.
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ADMISSION PROCESS</div>
                    <div class="card-content">
                        <ul>
                            <li>All candidates desirous of seeking admission to the MBA programme at DTU are required to visit website www.dtu.ac.in and fill registration form, pay a non-refundable registration fee and fill the choices for allotment of seat.</li>
                            <li>Admission shall be made on the basis of combined merit list which is prepared on the basis of CAT/MAT percentile and performance in personal interview and/or group discussion.</li>
                            <li>Allotment of seat will be done based on rank of the candidate in the merit list and 'preference of the university' applied by the candidate after verifications of documents in physical mode of counseling.</li>
                            <li>CMAC may decide an appropriate cut-off percentile of CAT/MAT/Graduation percentage with one year experience to prepare respective merit lists of the students for the purpose of shortlisting the candidates for admission.</li>
                        </ul>
                    </div>
                </div>

                <div class="brochure-section">
                    <div class="brochure-header">Brochure</div>
                    <div class="brochure-years">
                        <a href="#" class="year-link">>>2024</a>
                        <a href="#" class="year-link">>>2024</a>
                        <a href="#" class="year-link">>>2024</a>
                        <a href="#" class="year-link">>>2024</a>
                    </div>
                </div>

                <div class="apply-section">
                    <button class="apply-btn-main" onclick="window.open('https://www.cmacadmissions.com/', '_blank')">Apply for MBA General</button>
                </div>

                <div class="faq-section">
                    <div class="faq-header">FAQs</div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q1. How to apply?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Visit the official DTU website (www.dtu.ac.in), navigate to the admissions section, fill out the online registration form, upload required documents, and pay the application fee online.
                    </div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q2. How to register?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Registration can be done online through the DTU admission portal. You need to create an account with your email ID, fill in personal and academic details, and submit the form along with the registration fee.
                    </div>
                </div>
            </div>

            <!-- MBA-BA Content -->
            <div class="content-section" id="mba-ba">
                <div class="apply-section" style="margin-bottom: 20px;">
                    <button class="apply-btn-main" onclick="window.open('https://dtu.ac.in', '_blank')">Apply for MBA-BA</button>
                </div>
                <div class="info-card">
                    <div class="card-header">MBA - Business Analytics (MBA-BA) at DSM,DTU</div>
                    <div class="card-content">
                        <p>The MBA in Business Analytics is a specialized two-year full-time programme designed to equip students with advanced analytical skills and business acumen. The programme focuses on data-driven decision making, statistical analysis, machine learning, and business intelligence. Students learn to leverage big data technologies and analytical tools to solve complex business problems and drive organizational strategy.</p>
                        <p>The curriculum integrates core management courses with specialized analytics modules including Data Mining, Predictive Analytics, Business Intelligence, Machine Learning for Business, and Big Data Analytics. Industry projects and internships provide hands-on experience with real-world business challenges.</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ELIGIBILITY CRITERIA</div>
                    <div class="card-content">
                        <ol>
                            <li>Bachelor's degree in any discipline with minimum 60% marks or equivalent CGPA from a recognized university.</li>
                            <li>Valid CAT/MAT/GMAT score is mandatory.</li>
                            <li>Candidates with background in Mathematics, Statistics, Computer Science, or Engineering are preferred.</li>
                            <li>Basic programming knowledge (Python/R) is desirable but not mandatory.</li>
                            <li>Work experience in analytics, IT, or related fields will be given additional weightage.</li>
                        </ol>
                        <div class="note">
                            <strong>Note:</strong> Relaxation of 10% in marks for SC/ST/PwD candidates as per university norms.
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ADMISSION PROCESS</div>
                    <div class="card-content">
                        <ul>
                            <li>Apply online through the DTU admission portal with valid entrance exam scores.</li>
                            <li>Shortlisted candidates will be called for aptitude test and personal interview.</li>
                            <li>Final selection based on entrance score, academic record, aptitude test, and interview performance.</li>
                            <li>Document verification and counseling for seat allotment.</li>
                        </ul>
                    </div>
                </div>

                <div class="brochure-section">
                    <div class="brochure-header">Brochure</div>
                    <div class="brochure-years">
                        <a href="#" class="year-link">>>2024</a>
                        <a href="#" class="year-link">>>2023</a>
                        <a href="#" class="year-link">>>2022</a>
                    </div>
                </div>

                <div class="apply-section">
                    <button class="apply-btn-main" onclick="window.open('https://dtu.ac.in', '_blank')">Apply for MBA-BA</button>
                </div>

                <div class="faq-section">
                    <div class="faq-header">FAQs</div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q1. What programming languages are taught?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        The programme covers Python, R, SQL, and tools like Tableau, Power BI, and various machine learning frameworks.
                    </div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q2. What are the career opportunities?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Graduates can pursue roles like Data Analyst, Business Analyst, Data Scientist, Analytics Manager, BI Consultant, and Analytics Consultant in various industries.
                    </div>
                </div>
            </div>

            <!-- MBA-IEV Content -->
            <div class="content-section" id="mba-iev">
                <div class="apply-section" style="margin-bottom: 20px;">
                    <button class="apply-btn-main" onclick="window.open('https://dtu.ac.in', '_blank')">Apply for MBA-IEV</button>
                </div>
                <div class="info-card">
                    <div class="card-header">MBA - Innovation, Entrepreneurship & Venture Development (MBA-IEV) at DSM,DTU</div>
                    <div class="card-content">
                        <p>The MBA in Innovation, Entrepreneurship & Venture Development is a unique two-year programme designed for aspiring entrepreneurs and innovators. The programme focuses on developing entrepreneurial mindset, venture creation, innovation management, and startup ecosystem understanding.</p>
                        <p>Students work on live startup projects, engage with successful entrepreneurs and investors, and get access to DTU's incubation center. The curriculum covers business model innovation, design thinking, venture financing, startup operations, and scaling strategies.</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ELIGIBILITY CRITERIA</div>
                    <div class="card-content">
                        <ol>
                            <li>Bachelor's degree in any discipline with minimum 60% marks or equivalent CGPA.</li>
                            <li>Valid CAT/MAT/GMAT score.</li>
                            <li>Candidates with prior entrepreneurial experience or startup involvement are preferred.</li>
                            <li>Strong motivation towards entrepreneurship and innovation.</li>
                            <li>Business plan or startup idea presentation may be required during interview.</li>
                        </ol>
                        <div class="note">
                            <strong>Note:</strong> Candidates with existing startups can apply for flexible class schedules subject to approval.
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ADMISSION PROCESS</div>
                    <div class="card-content">
                        <ul>
                            <li>Online application with entrance exam scores and statement of purpose.</li>
                            <li>Pitch presentation and personal interview for shortlisted candidates.</li>
                            <li>Evaluation of entrepreneurial potential and business acumen.</li>
                            <li>Final merit list based on multiple parameters including innovation quotient.</li>
                        </ul>
                    </div>
                </div>

                <div class="brochure-section">
                    <div class="brochure-header">Brochure</div>
                    <div class="brochure-years">
                        <a href="#" class="year-link">>>2024</a>
                        <a href="#" class="year-link">>>2023</a>
                    </div>
                </div>

                <div class="apply-section">
                    <button class="apply-btn-main" onclick="window.open('https://dtu.ac.in', '_blank')">Apply for MBA-IEV</button>
                </div>

                <div class="faq-section">
                    <div class="faq-header">FAQs</div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q1. Is there incubation support available?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, students get access to DTU's incubation center with mentorship, funding opportunities, and infrastructure support for their ventures.
                    </div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q2. Can I work on my startup during the programme?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, the programme encourages students to develop and work on their startup ideas. Many course projects can be aligned with your venture.
                    </div>
                </div>
            </div>

            <!-- Executive MBA Content -->
            <div class="content-section" id="executive-mba">
                <div class="apply-section" style="margin-bottom: 20px;">
                    <button class="apply-btn-main" onclick="window.open('https://dtu.ac.in', '_blank')">Apply for Executive MBA</button>
                </div>
                <div class="info-card">
                    <div class="card-header">Executive MBA (Weekend Programme) at DSM,DTU</div>
                    <div class="card-content">
                        <p>The Executive MBA is a two-year weekend programme designed for working professionals who want to enhance their management skills while continuing their careers. Classes are held on weekends (Saturday and Sunday) to accommodate work schedules.</p>
                        <p>The programme offers the same rigorous curriculum as the full-time MBA with flexibility for executives. It covers strategic management, leadership, finance, marketing, operations, and emerging business trends. The cohort comprises experienced professionals, enabling rich peer learning and networking opportunities.</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ELIGIBILITY CRITERIA</div>
                    <div class="card-content">
                        <ol>
                            <li>Bachelor's degree in any discipline with minimum 50% marks from a recognized university.</li>
                            <li>Minimum 3 years of full-time work experience after graduation.</li>
                            <li>Valid CAT/MAT/GMAT score OR qualifying DTU entrance examination.</li>
                            <li>Currently employed professionals are preferred.</li>
                            <li>Sponsorship letter from employer (if applicable) for fee reimbursement.</li>
                        </ol>
                        <div class="note">
                            <strong>Note:</strong> Work experience is calculated from the date of completion of qualifying degree to the date of registration.
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="card-header">ADMISSION PROCESS</div>
                    <div class="card-content">
                        <ul>
                            <li>Online application with proof of work experience and entrance exam scores.</li>
                            <li>Personal interview to assess professional background and career goals.</li>
                            <li>Selection based on work experience, entrance score, and interview performance.</li>
                            <li>Document verification and fee payment for admission confirmation.</li>
                        </ul>
                    </div>
                </div>

                <div class="brochure-section">
                    <div class="brochure-header">Brochure</div>
                    <div class="brochure-years">
                        <a href="#" class="year-link">>>2024</a>
                        <a href="#" class="year-link">>>2023</a>
                        <a href="#" class="year-link">>>2022</a>
                        <a href="#" class="year-link">>>2021</a>
                    </div>
                </div>

                <div class="apply-section">
                    <button class="apply-btn-main" onclick="window.open('https://dtu.ac.in', '_blank')">Apply for Executive MBA</button>
                </div>

                <div class="faq-section">
                    <div class="faq-header">FAQs</div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q1. What is the class schedule?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Classes are held on Saturdays and Sundays from 9:00 AM to 5:00 PM. Some sessions may be conducted online for convenience.
                    </div>
                    <div class="faq-item" onclick="toggleFaq(this)">
                        <span>Q2. Is the degree equivalent to full-time MBA?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, the Executive MBA degree is equivalent to the full-time MBA and is recognized by UGC and AICTE. The curriculum and evaluation standards are the same.
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">• Home</a></li>
                    <li><a href="about.php">• About Us</a></li>
                    <li><a href="student_life.php">• Student Corner</a></li>
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


    <script>
        // Course card click functionality
        document.querySelectorAll('.course-card').forEach(card => {
            card.addEventListener('click', function() {
                // Remove active from all cards
                document.querySelectorAll('.course-card').forEach(c => c.classList.remove('active'));
                // Add active to clicked card
                this.classList.add('active');
                
                // Hide all content sections
                document.querySelectorAll('.content-section').forEach(section => {
                    section.classList.remove('active');
                });
                
                // Show selected content section
                const courseId = this.getAttribute('data-course');
                document.getElementById(courseId).classList.add('active');
                
                // Scroll to top of content area
                document.querySelector('.content-area').scrollTop = 0;
            });
        });

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

        // FAQ toggle functionality
        function toggleFaq(element) {
            element.classList.toggle('open');
            const answer = element.nextElementSibling;
            answer.classList.toggle('show');
        }
    </script>
</body>
</html>
