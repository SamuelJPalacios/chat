<?php 
require '../log/logcore.php';
date_default_timezone_set('America/Mexico_City');
session_start();
if (!isset($_SESSION['id'])) {
    die("Error: Sesión no iniciada o ID de usuario no definido.");
}

$id = $_SESSION['id'];
if (!isset($_POST['message'])) {
    die("Error: No se ha enviado ningún mensaje.");
}

$mensaje = $_POST['message'];
$hora = new DateTime();
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql="SELECT user FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    die("Error: No se encontró ningún usuario con el ID especificado.");
    header("Location: ../front/login.php");
}

while ($row = $result->fetch_assoc()) {
    $nombre = $row["user"];
}
$stmt->close();

//prepara la consulta 
$stmt = $conn->prepare('INSERT INTO chat (id, user, hour, mssg) VALUES (?, ?, ?, ?)');
if ($stmt === false) {
    die("Error en la preparación de la consulta de inserción: " . $conn->error);
}
$hora_formato = $hora->format('H:i');
$stmt->bind_param('isss', $id, $nombre, $hora_formato, $mensaje);
$stmt->execute();
$stmt->close();
$conn->close();

$url="../index.php?id=$id";
header("Location: $url");
exit;
?>