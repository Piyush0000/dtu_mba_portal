<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Admission - Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        h2 {
            color: #34495e;
            font-size: 1.3em;
            margin-bottom: 10px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        textarea {
            height: 100px;
            resize: vertical;
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
        }
        
        .checkbox-group input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        
        .btn {
            background-color: #3498db;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 20px auto 0;
        }
        
        .btn:hover {
            background-color: #2980b9;
        }
        
        .required {
            color: red;
        }
        
        .info-box {
            background-color: #e8f4fd;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>College Admission Application</h1>
        
        <div class="info-box">
            <p><strong>Important:</strong> Please fill out all required fields marked with <span class="required">*</span>. 
            Make sure all information is accurate before submitting your application.</p>
        </div>
        
        <form action="#" method="POST" enctype="multipart/form-data">
            
            <!-- Personal Information Section -->
            <div class="section">
                <h2>Personal Information</h2>
                
                <div class="form-group">
                    <label for="full_name">Full Name <span class="required">*</span></label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth <span class="required">*</span></label>
                    <input type="date" id="date_of_birth" name="date_of_birth" required>
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
                    <label for="email">Email Address <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="address">Permanent Address <span class="required">*</span></label>
                    <textarea id="address" name="address" placeholder="Full address including city, state, and postal code" required></textarea>
                </div>
            </div>
            
            <!-- Academic Information Section -->
            <div class="section">
                <h2>Academic Information</h2>
                
                <div class="form-group">
                    <label for="highest_qualification">Highest Qualification <span class="required">*</span></label>
                    <select id="highest_qualification" name="highest_qualification" required>
                        <option value="">Select Highest Qualification</option>
                        <option value="high_school">High School (10th)</option>
                        <option value="higher_secondary">Higher Secondary (12th)</option>
                        <option value="diploma">Diploma</option>
                        <option value="undergraduate">Undergraduate Degree</option>
                        <option value="postgraduate">Postgraduate Degree</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="institution_name">Name of Institution <span class="required">*</span></label>
                    <input type="text" id="institution_name" name="institution_name" required>
                </div>
                
                <div class="form-group">
                    <label for="board_university">Board/University <span class="required">*</span></label>
                    <input type="text" id="board_university" name="board_university" required>
                </div>
                
                <div class="form-group">
                    <label for="year_of_passing">Year of Passing <span class="required">*</span></label>
                    <input type="number" id="year_of_passing" name="year_of_passing" min="1950" max="2030" required>
                </div>
                
                <div class="form-group">
                    <label for="percentage_cgpa">Percentage/CGPA <span class="required">*</span></label>
                    <input type="text" id="percentage_cgpa" name="percentage_cgpa" placeholder="Enter percentage or CGPA" required>
                </div>
            </div>
            
            <!-- Program Selection Section -->
            <div class="section">
                <h2>Program Selection</h2>
                
                <div class="form-group">
                    <label for="program_type">Program Type <span class="required">*</span></label>
                    <select id="program_type" name="program_type" required>
                        <option value="">Select Program Type</option>
                        <option value="undergraduate">Undergraduate (UG)</option>
                        <option value="postgraduate">Postgraduate (PG)</option>
                        <option value="diploma">Diploma</option>
                        <option value="certificate">Certificate Course</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="course">Course/Program <span class="required">*</span></label>
                    <select id="course" name="course" required>
                        <option value="">Select Course</option>
                        <option value="btech">B.Tech</option>
                        <option value="bcom">B.Com</option>
                        <option value="ba">B.A</option>
                        <option value="bca">B.C.A</option>
                        <option value="mba">M.B.A</option>
                        <option value="mtech">M.Tech</option>
                        <option value="msc">M.Sc</option>
                        <option value="ma">M.A</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="admission_year">Admission Year <span class="required">*</span></label>
                    <input type="number" id="admission_year" name="admission_year" min="2020" max="2030" value="<?php echo date('Y'); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="admission_category">Admission Category <span class="required">*</span></label>
                    <select id="admission_category" name="admission_category" required>
                        <option value="">Select Category</option>
                        <option value="general">General</option>
                        <option value="sc">SC</option>
                        <option value="st">ST</option>
                        <option value="obc">OBC</option>
                        <option value="ews">EWS</option>
                    </select>
                </div>
            </div>
            
            <!-- Documents Upload Section -->
            <div class="section">
                <h2>Document Upload</h2>
                
                <div class="form-group">
                    <label for="photo">Recent Passport Size Photo <span class="required">*</span></label>
                    <input type="file" id="photo" name="photo" accept="image/*" required>
                </div>
                
                <div class="form-group">
                    <label for="signature">Signature <span class="required">*</span></label>
                    <input type="file" id="signature" name="signature" accept="image/*" required>
                </div>
                
                <div class="form-group">
                    <label for="marksheet">Marksheet (Latest) <span class="required">*</span></label>
                    <input type="file" id="marksheet" name="marksheet" accept=".pdf,.jpg,.jpeg,.png" required>
                </div>
                
                <div class="form-group">
                    <label for="transfer_certificate">Transfer Certificate (TC)</label>
                    <input type="file" id="transfer_certificate" name="transfer_certificate" accept=".pdf,.jpg,.jpeg,.png">
                </div>
                
                <div class="form-group">
                    <label for="migration_certificate">Migration Certificate (if applicable)</label>
                    <input type="file" id="migration_certificate" name="migration_certificate" accept=".pdf,.jpg,.jpeg,.png">
                </div>
            </div>
            
            <!-- Declaration Section -->
            <div class="section">
                <h2>Declaration</h2>
                
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="declaration" name="declaration" required>
                    <label for="declaration">I declare that all the information provided above is true and correct to the best of my knowledge. I understand that any false information will lead to cancellation of my admission. <span class="required">*</span></label>
                </div>
            </div>
            
            <button type="submit" class="btn">Submit Application</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>