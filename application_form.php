<?php
// Process form submission if POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'config.php';
    
    // Define upload directory
    $upload_dir = 'uploads/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    try {
        // Validate and sanitize input data
        $first_name = sanitize_input($_POST['first_name']);
        $middle_name = sanitize_input($_POST['middle_name'] ?? '');
        $last_name = sanitize_input($_POST['last_name']);
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $nationality = sanitize_input($_POST['nationality']);
        $email = sanitize_input($_POST['email']);
        $phone = sanitize_input($_POST['phone']);
        $address = sanitize_input($_POST['address']);
        $city = sanitize_input($_POST['city']);
        $state = sanitize_input($_POST['state']);
        $zip = sanitize_input($_POST['zip']);
        $highest_qualification = $_POST['highest_qualification'];
        $degree_name = sanitize_input($_POST['degree_name']);
        $university = sanitize_input($_POST['university']);
        $passing_year = (int)$_POST['passing_year'];
        $percentage = sanitize_input($_POST['percentage']);
        $grade = sanitize_input($_POST['grade'] ?? '');
        $entrance_exam = $_POST['entrance_exam'];
        $exam_score = sanitize_input($_POST['exam_score']);
        $exam_year = (int)$_POST['exam_year'];
        $exam_registration_no = sanitize_input($_POST['exam_registration_no'] ?? '');
        $program_type = $_POST['program_type'];
        $specialization = $_POST['specialization'];
        $admission_year = (int)$_POST['admission_year'];
        $category = $_POST['category'];
        $work_experience = (float)($_POST['work_experience'] ?? 0);
        $current_company = sanitize_input($_POST['current_company'] ?? '');
        $job_title = sanitize_input($_POST['job_title'] ?? '');
        $work_status = $_POST['work_status'] ?? 'student';
        $declaration = isset($_POST['declaration']) ? 1 : 0;
        $terms = isset($_POST['terms']) ? 1 : 0;
        
        // Validate required fields
        if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($address) || 
            empty($city) || empty($state) || empty($zip) || empty($highest_qualification) || 
            empty($degree_name) || empty($university) || empty($passing_year) || empty($percentage) ||
            empty($entrance_exam) || empty($exam_score) || empty($exam_year) || empty($program_type) || 
            empty($specialization) || empty($admission_year) || empty($category) || !$declaration || !$terms) {
            throw new Exception('All required fields must be filled.');
        }
        
        // Validate email
        if (!validate_email($email)) {
            throw new Exception('Invalid email address.');
        }
        
        // Validate phone
        if (!validate_phone($phone)) {
            throw new Exception('Invalid phone number.');
        }
        
        // Validate date
        if (!validate_date($dob)) {
            throw new Exception('Invalid date of birth.');
        }
        
        // Generate unique application number
        $application_number = 'APP' . date('Y') . sprintf('%06d', rand(100000, 999999));
        
        // Handle file uploads
        $passport_photo_path = '';
        $signature_path = '';
        $marksheet_path = '';
        $entrance_scorecard_path = '';
        $work_experience_cert_path = '';
        $category_certificate_path = '';
        
        if (isset($_FILES['passport_photo']) && $_FILES['passport_photo']['error'] === UPLOAD_ERR_OK) {
            if (validate_file_upload($_FILES['passport_photo'], ['jpg', 'jpeg', 'png'])) {
                $file_extension = pathinfo($_FILES['passport_photo']['name'], PATHINFO_EXTENSION);
                $filename = $application_number . '_photo.' . $file_extension;
                $filepath = $upload_dir . $filename;
                if (move_uploaded_file($_FILES['passport_photo']['tmp_name'], $filepath)) {
                    $passport_photo_path = $filepath;
                }
            }
        }
        
        if (isset($_FILES['signature']) && $_FILES['signature']['error'] === UPLOAD_ERR_OK) {
            if (validate_file_upload($_FILES['signature'], ['jpg', 'jpeg', 'png'])) {
                $file_extension = pathinfo($_FILES['signature']['name'], PATHINFO_EXTENSION);
                $filename = $application_number . '_signature.' . $file_extension;
                $filepath = $upload_dir . $filename;
                if (move_uploaded_file($_FILES['signature']['tmp_name'], $filepath)) {
                    $signature_path = $filepath;
                }
            }
        }
        
        if (isset($_FILES['marksheet']) && $_FILES['marksheet']['error'] === UPLOAD_ERR_OK) {
            if (validate_file_upload($_FILES['marksheet'], ['pdf', 'jpg', 'jpeg', 'png'])) {
                $file_extension = pathinfo($_FILES['marksheet']['name'], PATHINFO_EXTENSION);
                $filename = $application_number . '_marksheet.' . $file_extension;
                $filepath = $upload_dir . $filename;
                if (move_uploaded_file($_FILES['marksheet']['tmp_name'], $filepath)) {
                    $marksheet_path = $filepath;
                }
            }
        }
        
        if (isset($_FILES['entrance_scorecard']) && $_FILES['entrance_scorecard']['error'] === UPLOAD_ERR_OK) {
            if (validate_file_upload($_FILES['entrance_scorecard'], ['pdf', 'jpg', 'jpeg', 'png'])) {
                $file_extension = pathinfo($_FILES['entrance_scorecard']['name'], PATHINFO_EXTENSION);
                $filename = $application_number . '_scorecard.' . $file_extension;
                $filepath = $upload_dir . $filename;
                if (move_uploaded_file($_FILES['entrance_scorecard']['tmp_name'], $filepath)) {
                    $entrance_scorecard_path = $filepath;
                }
            }
        }
        
        if (isset($_FILES['work_experience_cert']) && $_FILES['work_experience_cert']['error'] === UPLOAD_ERR_OK && $_FILES['work_experience_cert']['size'] > 0) {
            if (validate_file_upload($_FILES['work_experience_cert'], ['pdf', 'jpg', 'jpeg', 'png'])) {
                $file_extension = pathinfo($_FILES['work_experience_cert']['name'], PATHINFO_EXTENSION);
                $filename = $application_number . '_work_cert.' . $file_extension;
                $filepath = $upload_dir . $filename;
                if (move_uploaded_file($_FILES['work_experience_cert']['tmp_name'], $filepath)) {
                    $work_experience_cert_path = $filepath;
                }
            }
        }
        
        if (isset($_FILES['category_certificate']) && $_FILES['category_certificate']['error'] === UPLOAD_ERR_OK && $_FILES['category_certificate']['size'] > 0) {
            if (validate_file_upload($_FILES['category_certificate'], ['pdf', 'jpg', 'jpeg', 'png'])) {
                $file_extension = pathinfo($_FILES['category_certificate']['name'], PATHINFO_EXTENSION);
                $filename = $application_number . '_category_cert.' . $file_extension;
                $filepath = $upload_dir . $filename;
                if (move_uploaded_file($_FILES['category_certificate']['tmp_name'], $filepath)) {
                    $category_certificate_path = $filepath;
                }
            }
        }
        
        // Prepare and execute SQL statement
        $sql = "INSERT INTO applicants (
            application_number, first_name, middle_name, last_name, date_of_birth, gender, 
            nationality, email, phone, permanent_address, city, state, zip_code, 
            highest_qualification, degree_name, university, passing_year, percentage, grade,
            entrance_exam, exam_score, exam_year, exam_registration_no,
            program_type, specialization, admission_year, category,
            work_experience_years, current_company, job_title, work_status,
            passport_photo_path, signature_path, marksheet_path, entrance_scorecard_path,
            work_experience_cert_path, category_certificate_path,
            declaration_accepted, terms_accepted, application_status, created_by_ip
        ) VALUES (
            :application_number, :first_name, :middle_name, :last_name, :date_of_birth, :gender,
            :nationality, :email, :phone, :permanent_address, :city, :state, :zip_code,
            :highest_qualification, :degree_name, :university, :passing_year, :percentage, :grade,
            :entrance_exam, :exam_score, :exam_year, :exam_registration_no,
            :program_type, :specialization, :admission_year, :category,
            :work_experience_years, :current_company, :job_title, :work_status,
            :passport_photo_path, :signature_path, :marksheet_path, :entrance_scorecard_path,
            :work_experience_cert_path, :category_certificate_path,
            :declaration_accepted, :terms_accepted, :application_status, :created_by_ip
        )";
        
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([
            'application_number' => $application_number,
            'first_name' => $first_name,
            'middle_name' => $middle_name,
            'last_name' => $last_name,
            'date_of_birth' => $dob,
            'gender' => $gender,
            'nationality' => $nationality,
            'email' => $email,
            'phone' => $phone,
            'permanent_address' => $address,
            'city' => $city,
            'state' => $state,
            'zip_code' => $zip,
            'highest_qualification' => $highest_qualification,
            'degree_name' => $degree_name,
            'university' => $university,
            'passing_year' => $passing_year,
            'percentage' => $percentage,
            'grade' => $grade,
            'entrance_exam' => $entrance_exam,
            'exam_score' => $exam_score,
            'exam_year' => $exam_year,
            'exam_registration_no' => $exam_registration_no,
            'program_type' => $program_type,
            'specialization' => $specialization,
            'admission_year' => $admission_year,
            'category' => $category,
            'work_experience_years' => $work_experience,
            'current_company' => $current_company,
            'job_title' => $job_title,
            'work_status' => $work_status,
            'passport_photo_path' => $passport_photo_path,
            'signature_path' => $signature_path,
            'marksheet_path' => $marksheet_path,
            'entrance_scorecard_path' => $entrance_scorecard_path,
            'work_experience_cert_path' => $work_experience_cert_path,
            'category_certificate_path' => $category_certificate_path,
            'declaration_accepted' => $declaration,
            'terms_accepted' => $terms,
            'application_status' => 'pending',
            'created_by_ip' => $_SERVER['REMOTE_ADDR']
        ]);
        
        if ($result) {
            $success_message = "Your admission application has been submitted successfully! Your application number is: <strong>" . $application_number . "</strong>. We will contact you shortly.";
        } else {
            throw new Exception('Failed to save application.');
        }
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTU - MBA Application Form</title>
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
            color: #333;
        }

        .container {
            max-width: 1200px;
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
            text-align: center;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 16px;
            opacity: 0.9;
        }

        .form-container {
            padding: 30px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #e1e5eb;
            border-radius: 8px;
            background-color: #fafcff;
        }

        .section-title {
            color: #052963;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #052963;
            font-size: 20px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 1;
            min-width: 250px;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #2c3e50;
        }

        .required {
            color: #e74c3c;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #052963;
            box-shadow: 0 0 0 3px rgba(5, 41, 99, 0.1);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .checkbox-group input[type="checkbox"] {
            width: auto;
        }

        .document-upload {
            border: 2px dashed #bdc3c7;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: border-color 0.3s ease;
        }

        .document-upload:hover {
            border-color: #052963;
        }

        .document-upload i {
            font-size: 2em;
            color: #7f8c8d;
            margin-bottom: 10px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .btn {
            padding: 14px 40px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit {
            background: linear-gradient(135deg, #052963 0%, #0d4a9e 100%);
            color: white;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #041e42 0%, #0a3a7a 100%);
            transform: translateY(-2px);
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border: 1px solid #c3e6cb;
            text-align: center;
            display: <?php echo isset($success_message) ? 'block' : 'none'; ?>;
        }

        .instructions {
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #052963;
        }

        .instructions ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        .instructions li {
            margin-bottom: 5px;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .btn {
                width: 100%;
            }
            
            .container {
                margin: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-file-alt"></i> MBA Admission Application Form</h1>
            <p>Delhi Technical University - DSM School of Management</p>
        </div>

        <div class="form-container">
            <?php if (isset($success_message)): ?>
                <div class="success-message">
                    <i class="fas fa-check-circle"></i> <?php echo $success_message; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($error_message)): ?>
                <div class="success-message" style="background: #f8d7da; color: #721c24; border-color: #f5c6cb;">
                    <i class="fas fa-exclamation-triangle"></i> Error: <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <div class="instructions">
                <strong>Instructions:</strong>
                <ul>
                    <li>Please fill all required fields marked with <span class="required">*</span></li>
                    <li>All information provided must be accurate and verifiable</li>
                    <li>Upload documents in PDF, JPG, or PNG format only</li>
                    <li>Maximum file size: 5MB per document</li>
                </ul>
            </div>

            <form action="" method="POST" enctype="multipart/form-data">
                <!-- Personal Information Section -->
                <div class="section">
                    <h2 class="section-title"><i class="fas fa-user"></i> Personal Information</h2>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name <span class="required">*</span></label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" id="middle_name" name="middle_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name <span class="required">*</span></label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="dob">Date of Birth <span class="required">*</span></label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender <span class="required">*</span></label>
                            <select id="gender" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality <span class="required">*</span></label>
                            <input type="text" id="nationality" name="nationality" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number <span class="required">*</span></label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Permanent Address <span class="required">*</span></label>
                        <textarea id="address" name="address" rows="3" required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">City <span class="required">*</span></label>
                            <input type="text" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="state">State <span class="required">*</span></label>
                            <input type="text" id="state" name="state" required>
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP/Postal Code <span class="required">*</span></label>
                            <input type="text" id="zip" name="zip" required>
                        </div>
                    </div>
                </div>

                <!-- Academic Information Section -->
                <div class="section">
                    <h2 class="section-title"><i class="fas fa-graduation-cap"></i> Academic Information</h2>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="highest_qualification">Highest Qualification <span class="required">*</span></label>
                            <select id="highest_qualification" name="highest_qualification" required>
                                <option value="">Select Qualification</option>
                                <option value="bachelors">Bachelor's Degree</option>
                                <option value="masters">Master's Degree</option>
                                <option value="diploma">Diploma</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="degree_name">Degree Name <span class="required">*</span></label>
                            <input type="text" id="degree_name" name="degree_name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="university">University/Institution <span class="required">*</span></label>
                            <input type="text" id="university" name="university" required>
                        </div>
                        <div class="form-group">
                            <label for="passing_year">Year of Passing <span class="required">*</span></label>
                            <input type="number" id="passing_year" name="passing_year" min="1950" max="2030" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="percentage">Percentage/CGPA <span class="required">*</span></label>
                            <input type="text" id="percentage" name="percentage" placeholder="Enter percentage or CGPA" required>
                        </div>
                        <div class="form-group">
                            <label for="grade">Grade (if applicable)</label>
                            <input type="text" id="grade" name="grade">
                        </div>
                    </div>
                </div>

                <!-- Entrance Exam Information Section -->
                <div class="section">
                    <h2 class="section-title"><i class="fas fa-tasks"></i> Entrance Exam Information</h2>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="entrance_exam">Entrance Exam <span class="required">*</span></label>
                            <select id="entrance_exam" name="entrance_exam" required>
                                <option value="">Select Exam</option>
                                <option value="cat">CAT</option>
                                <option value="mat">MAT</option>
                                <option value="xat">XAT</option>
                                <option value="cmat">CMAT</option>
                                <option value="atma">ATMA</option>
                                <option value="gmat">GMAT</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exam_score">Exam Score <span class="required">*</span></label>
                            <input type="text" id="exam_score" name="exam_score" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="exam_year">Exam Year <span class="required">*</span></label>
                            <input type="number" id="exam_year" name="exam_year" min="2020" max="2030" required>
                        </div>
                        <div class="form-group">
                            <label for="exam_registration_no">Registration Number</label>
                            <input type="text" id="exam_registration_no" name="exam_registration_no">
                        </div>
                    </div>
                </div>

                <!-- Program Selection Section -->
                <div class="section">
                    <h2 class="section-title"><i class="fas fa-book-open"></i> Program Selection</h2>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="program_type">Program Type <span class="required">*</span></label>
                            <select id="program_type" name="program_type" required>
                                <option value="full_time">Full Time</option>
                                <option value="part_time">Part Time</option>
                                <option value="executive">Executive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="specialization">Specialization <span class="required">*</span></label>
                            <select id="specialization" name="specialization" required>
                                <option value="">Select Specialization</option>
                                <option value="finance">Finance</option>
                                <option value="marketing">Marketing</option>
                                <option value="hr">Human Resources</option>
                                <option value="operations">Operations</option>
                                <option value="it">Information Technology</option>
                                <option value="international_business">International Business</option>
                                <option value="entrepreneurship">Entrepreneurship</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="admission_year">Admission Year <span class="required">*</span></label>
                            <input type="number" id="admission_year" name="admission_year" min="2024" max="2030" value="2024" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category <span class="required">*</span></label>
                            <select id="category" name="category" required>
                                <option value="">Select Category</option>
                                <option value="general">General</option>
                                <option value="obc">OBC</option>
                                <option value="sc">SC</option>
                                <option value="st">ST</option>
                                <option value="ews">EWS</option>
                                <option value="pwd">PWD</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Work Experience Section -->
                <div class="section">
                    <h2 class="section-title"><i class="fas fa-briefcase"></i> Work Experience (if any)</h2>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="work_experience">Total Years of Experience</label>
                            <input type="number" id="work_experience" name="work_experience" min="0" max="50" step="0.1" placeholder="0.0">
                        </div>
                        <div class="form-group">
                            <label for="current_company">Current Company</label>
                            <input type="text" id="current_company" name="current_company">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" id="job_title" name="job_title">
                        </div>
                        <div class="form-group">
                            <label for="work_status">Current Work Status</label>
                            <select id="work_status" name="work_status">
                                <option value="employed">Employed</option>
                                <option value="unemployed">Unemployed</option>
                                <option value="freelancer">Freelancer</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Document Upload Section -->
                <div class="section">
                    <h2 class="section-title"><i class="fas fa-cloud-upload-alt"></i> Document Upload</h2>
                    
                    <div class="form-group">
                        <label for="passport_photo">Passport Size Photo (JPG/PNG) <span class="required">*</span></label>
                        <input type="file" id="passport_photo" name="passport_photo" accept="image/*" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="signature">Signature (JPG/PNG) <span class="required">*</span></label>
                        <input type="file" id="signature" name="signature" accept="image/*" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="marksheet">Mark Sheet/Degree Certificate (PDF) <span class="required">*</span></label>
                        <input type="file" id="marksheet" name="marksheet" accept=".pdf,.jpg,.jpeg,.png" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="entrance_scorecard">Entrance Exam Scorecard (PDF) <span class="required">*</span></label>
                        <input type="file" id="entrance_scorecard" name="entrance_scorecard" accept=".pdf,.jpg,.jpeg,.png" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="work_experience_cert">Work Experience Certificate (if any)</label>
                        <input type="file" id="work_experience_cert" name="work_experience_cert" accept=".pdf,.jpg,.jpeg,.png">
                    </div>
                    
                    <div class="form-group">
                        <label for="category_certificate">Category Certificate (if applicable)</label>
                        <input type="file" id="category_certificate" name="category_certificate" accept=".pdf,.jpg,.jpeg,.png">
                    </div>
                </div>

                <!-- Declaration Section -->
                <div class="section">
                    <h2 class="section-title"><i class="fas fa-check-square"></i> Declaration</h2>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="declaration" name="declaration" required>
                            <label for="declaration">I hereby declare that all the information provided in this application is true and correct to the best of my knowledge. I understand that any false information will lead to cancellation of my admission. <span class="required">*</span></label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I agree to the terms and conditions of admission and privacy policy of Delhi Technical University. <span class="required">*</span></label>
                        </div>
                    </div>
                </div>

                <div class="btn-container">
                    <button type="submit" class="btn btn-submit">
                        <i class="fas fa-paper-plane"></i> Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Add some client-side validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:required:checked');
            const requiredCheckboxes = document.querySelectorAll('input[type="checkbox"]:required');
            
            if(checkboxes.length !== requiredCheckboxes.length) {
                e.preventDefault();
                alert('Please check all required checkboxes before submitting.');
                return false;
            }
            
            // Show loading message
            const submitBtn = document.querySelector('.btn-submit');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            submitBtn.disabled = true;
        });
    </script>
</body>
</html>