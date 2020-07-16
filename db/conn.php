<?php

$email = $_POST['email'];

// DATABASE CONNECT
$conn = new mysqli('127.0.0.1', 'root', '', 'original');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into nemos(email)
        values(?)");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    echo "success";
    $stmt->close();
    $conn->close();
}











































// $host = '127.0.0.1';
// $db = 'original';
// $user = 'root';
// $password = '';
// $charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


// try {
//     $pdo = new PDO($dsn, $user, $password);
//     // echo "<h1 class='text-success'>Hello Database</h1>";
// } catch (PDOException $e) {
//     // echo "<h1 class='text-danger'>No database found</h1>";
//     throw new PDOException($e->getMessage());
// }
