<?php
$servername = "localhost";
$username = "udhistrra";
$password = "admin29";
$db = "coffee_shot"; // This is your database name

// MySQLi connection
$conn = mysqli_connect($servername, $username, $password, $db);

try {
    // Correct the host and dbname here
    $pdo = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
