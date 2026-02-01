<?php
// Database Configuration File
// This file contains the database connection settings for the admission system

// Database configuration constants
define('DB_HOST', 'localhost');          // Database host
define('DB_NAME', 'dtu_admission');      // Database name
define('DB_USER', 'root');               // Database username
define('DB_PASS', '');                   // Database password
define('DB_CHARSET', 'utf8mb4');         // Database charset

// Create PDO connection
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate phone number
function validate_phone($phone) {
    // Remove any non-digit characters
    $phone = preg_replace('/[^0-9]/', '', $phone);
    return strlen($phone) >= 10 && strlen($phone) <= 15;
}

// Function to validate date format (YYYY-MM-DD)
function validate_date($date) {
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}

// Function to check if file is valid for upload
function validate_file_upload($file, $allowed_types = ['pdf', 'jpg', 'jpeg', 'png'], $max_size = 5242880) { // 5MB default
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }
    
    if ($file['size'] > $max_size) {
        return false;
    }
    
    $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    return in_array($file_ext, $allowed_types);
}

// Function to hash passwords (for admin/users)
function hash_password($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Function to verify passwords
function verify_password($password, $hash) {
    return password_verify($password, $hash);
}

// Example usage for connecting to database:
/*
try {
    $stmt = $pdo->prepare("SELECT * FROM applicants WHERE email = ?");
    $stmt->execute([$_POST['email']]);
    $result = $stmt->fetch();
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    // Handle error appropriately
}
*/
?>