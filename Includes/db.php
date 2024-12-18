<?php
$host = 'localhost';
$db = 'blood';
$user = 'root';
$password = '83ETASNM';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
