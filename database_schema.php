<?php
// Database Schema for DTU Admission System
// This file contains SQL statements to create the necessary tables

$database_schema = "
-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS dtu_admission CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE dtu_admission;

-- Table for storing applicant information
CREATE TABLE IF NOT EXISTS applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    application_number VARCHAR(20) UNIQUE NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50),
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    whatsapp_number VARCHAR(15),
    permanent_address TEXT NOT NULL,
    correspondence_address TEXT,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip_code VARCHAR(10) NOT NULL,
    country VARCHAR(50) DEFAULT 'India',
    highest_qualification VARCHAR(100) NOT NULL,
    degree_name VARCHAR(100) NOT NULL,
    university VARCHAR(150) NOT NULL,
    passing_year YEAR NOT NULL,
    percentage DECIMAL(5,2),
    grade VARCHAR(10),
    entrance_exam VARCHAR(20),
    exam_score VARCHAR(20),
    exam_year YEAR,
    exam_registration_no VARCHAR(50),
    program_type ENUM('full_time', 'part_time', 'executive') DEFAULT 'full_time',
    specialization VARCHAR(100),
    admission_year YEAR NOT NULL,
    category ENUM('general', 'obc', 'sc', 'st', 'ews', 'pwd') NOT NULL,
    work_experience_years DECIMAL(3,1) DEFAULT 0,
    current_company VARCHAR(100),
    job_title VARCHAR(100),
    work_status ENUM('employed', 'unemployed', 'freelancer', 'student') DEFAULT 'student',
    passport_photo_path VARCHAR(255),
    signature_path VARCHAR(255),
    marksheet_path VARCHAR(255),
    entrance_scorecard_path VARCHAR(255),
    work_experience_cert_path VARCHAR(255),
    category_certificate_path VARCHAR(255),
    declaration_accepted BOOLEAN DEFAULT FALSE,
    terms_accepted BOOLEAN DEFAULT FALSE,
    application_status ENUM('pending', 'review', 'shortlisted', 'rejected', 'admitted', 'cancelled') DEFAULT 'pending',
    payment_status ENUM('pending', 'completed', 'failed') DEFAULT 'pending',
    application_fee_paid BOOLEAN DEFAULT FALSE,
    application_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by_ip VARCHAR(45),
    updated_by_ip VARCHAR(45)
);

-- Table for storing admission rounds/selection process
CREATE TABLE IF NOT EXISTS admission_rounds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    applicant_id INT NOT NULL,
    round_type ENUM('written_test', 'group_discussion', 'personal_interview', 'final_selection') NOT NULL,
    round_date DATETIME,
    round_location VARCHAR(100),
    round_result ENUM('passed', 'failed', 'absent') DEFAULT 'absent',
    round_score DECIMAL(5,2),
    round_feedback TEXT,
    conducted_by VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (applicant_id) REFERENCES applicants(id) ON DELETE CASCADE
);

-- Table for storing payment transactions
CREATE TABLE IF NOT EXISTS payment_transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    applicant_id INT NOT NULL,
    transaction_id VARCHAR(100) UNIQUE NOT NULL,
    payment_gateway VARCHAR(50),
    amount DECIMAL(10,2) NOT NULL,
    currency VARCHAR(3) DEFAULT 'INR',
    payment_status ENUM('initiated', 'completed', 'failed', 'refunded') DEFAULT 'initiated',
    payment_method VARCHAR(50),
    payment_date TIMESTAMP NULL,
    gateway_response TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (applicant_id) REFERENCES applicants(id) ON DELETE CASCADE
);

-- Table for storing course/program information
CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_code VARCHAR(20) UNIQUE NOT NULL,
    course_name VARCHAR(100) NOT NULL,
    course_description TEXT,
    duration_months INT NOT NULL,
    total_seats INT NOT NULL,
    available_seats INT NOT NULL,
    tuition_fees DECIMAL(12,2) NOT NULL,
    admission_fee DECIMAL(10,2) DEFAULT 0,
    other_fees DECIMAL(10,2) DEFAULT 0,
    eligibility_criteria TEXT,
    admission_process TEXT,
    start_date DATE,
    end_date DATE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table for storing user accounts (admin, staff)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'admission_officer', 'faculty', 'staff') DEFAULT 'staff',
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone VARCHAR(15),
    is_active BOOLEAN DEFAULT TRUE,
    last_login TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table for storing notifications/communications
CREATE TABLE IF NOT EXISTS notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recipient_type ENUM('applicant', 'user') NOT NULL,
    recipient_id INT NOT NULL,
    notification_type ENUM('application_status', 'payment', 'admission_round', 'general') NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    sent_by INT,
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_recipient (recipient_type, recipient_id),
    INDEX idx_notification_type (notification_type)
);

-- Insert default admin user (password: admin123)
INSERT INTO users (username, email, password_hash, role, first_name, last_name, phone, is_active) 
VALUES ('admin', 'admin@dtu.ac.in', '" . password_hash('admin123', PASSWORD_DEFAULT) . "', 'admin', 'System', 'Administrator', '+919999999999', 1)
ON DUPLICATE KEY UPDATE username = username; -- Prevent duplicate insertions

-- Insert sample course
INSERT INTO courses (course_code, course_name, course_description, duration_months, total_seats, available_seats, tuition_fees, admission_fee, eligibility_criteria, start_date) 
VALUES 
('MBA-FT', 'Master of Business Administration (Full-Time)', 'Two-year full-time MBA program with various specializations', 24, 120, 120, 850000.00, 50000.00, 'Bachelor\\'s degree with minimum 50% marks and valid entrance exam score', '2024-08-01')
ON DUPLICATE KEY UPDATE course_name = course_name;

-- Create indexes for better performance
CREATE INDEX idx_applicants_email ON applicants(email);
CREATE INDEX idx_applicants_application_number ON applicants(application_number);
CREATE INDEX idx_applicants_status ON applicants(application_status);
CREATE INDEX idx_applicants_category ON applicants(category);
CREATE INDEX idx_applicants_admission_year ON applicants(admission_year);
CREATE INDEX idx_admission_rounds_applicant ON admission_rounds(applicant_id);
CREATE INDEX idx_payment_transactions_applicant ON payment_transactions(applicant_id);
";

// Function to execute the schema
function executeSchema($pdo, $schema_sql) {
    try {
        // Split the schema into individual statements
        $statements = explode(';', $schema_sql);
        
        foreach ($statements as $statement) {
            $statement = trim($statement);
            if (!empty($statement)) {
                $pdo->exec($statement);
            }
        }
        
        return true;
    } catch (PDOException $e) {
        error_log("Schema execution error: " . $e->getMessage());
        return false;
    }
}

// Example usage:
/*
require_once 'config.php'; // Include the database configuration

if (executeSchema($pdo, $database_schema)) {
    echo 'Database schema created successfully!';
} else {
    echo 'Error creating database schema.';
}
*/
?>