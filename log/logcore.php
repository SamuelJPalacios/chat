<?php
$servername = "localhost";
$username = "root"; // Usualmente es "root" en XAMPP
$password = ""; // En XAMPP, la contraseña por defecto es vacía
$dbname = "pompom_db";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("error". $conn->connect_error);
}
?>