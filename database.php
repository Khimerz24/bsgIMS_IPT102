<?php
// --- Hosting Database Credentials ---
$host = 'mysql.bsg-ims.online'; // e.g., 'mysql.yourdomain.com' or '127.0.0.1' - Check your host!
$dbname = 'bsg_ims';   // e.g., 'yourhostinguser_bsg_ims'
$username = 'root'; // e.g., 'yourhostinguser_dbuser'
$password = 'Francorafael'; // The strong password you created

// --- Connection Attempt ---
try {
    // Use the variables defined above
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set error mode to exception for better debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Set character set (good practice)
    $pdo->exec("SET NAMES 'utf8mb4'");

} catch(PDOException $e) {
    // Log the detailed error for your reference (check server error logs)
    error_log("Database Connection failed: " . $e->getMessage());

    // Show a generic error to the user
    // Consider creating a more user-friendly error page instead of just die()
    die("Database connection error. Unable to connect to the service. Please try again later or contact support.");
}

?>




