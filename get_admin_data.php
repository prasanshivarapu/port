<?php
// Assuming you have a database connection

$host = 'localhost';
$dbname = 'port';
$username = 'admin';
$password = '1234';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Select all rows from the 'portfo' table
    $stmt = $conn->query("SELECT * FROM portfo");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} catch (PDOException $e) {
    // Handle database connection errors
    echo json_encode(array("error" => "Database error: " . $e->getMessage()));
}

$conn = null;
?>
