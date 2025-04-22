<?php // Line 1
$host = 'localhost'; // Line 2
// require_once 'includes/bootstrap.php'; // <-- THIS LINE SHOULD BE GONE or COMMENTED OUT like this
$dbname = 'bsg_ims'; // Line 4 (or 3)
$username = 'root';
$password = 'Francorafael';



try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
     error_log("Database Connection failed: " . $e->getMessage());
     die("Database connection error. Please check logs or contact support.");
 }

 ?>

=

