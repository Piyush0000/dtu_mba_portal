<?php
/**
 * DTU Admission System - Setup Script
 * This script will create the database and tables for the admission system
 */

// Include configuration
require_once 'config.php';

// Include database schema
require_once 'database_schema.php';

echo "<h2>DTU Admission System Setup</h2>";

// Check database connection
try {
    echo "<p>✓ Database connection successful</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>✗ Database connection failed: " . $e->getMessage() . "</p>";
    exit;
}

// Execute schema
if (executeSchema($pdo, $database_schema)) {
    echo "<p style='color: green;'>✓ Database schema created successfully!</p>";
    echo "<p style='color: green;'>✓ Default admin user created (username: admin, password: admin123)</p>";
    echo "<p style='color: green;'>✓ Sample MBA course added</p>";
} else {
    echo "<p style='color: red;'>✗ Error creating database schema</p>";
    exit;
}

echo "<h3>Setup Complete!</h3>";
echo "<p>You can now access the admission system.</p>";
echo "<p><strong>Admin Panel:</strong> You can log in with the default credentials:</p>";
echo "<ul>";
echo "<li>Username: <strong>admin</strong></li>";
echo "<li>Password: <strong>admin123</strong></li>";
echo "</ul>";
echo "<p><a href='index.php'>Go to Admission Portal</a></p>";

// Close connection
$pdo = null;
?>