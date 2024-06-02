<?php 
require '../log/logcore.php';
require 'auth.php';

$id = $_SESSION['id'];
$mensaje = $_POST['message'];
$hora = new DateTime();

$sql="SELECT user FROM users WHERE id=".$id."";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $nombre = $row["user"];
}

//prepara la consulta 
$stmt = $conn->prepare('INSERT INTO chat (id, user, hour, mssg) VALUES (?, ?, ?, ?)');
$hora_formato = $hora->format('H:i');
$stmt->bind_param('isss', $id, $nombre, $hora_formato, $mensaje);
$stmt->execute();
$stmt->close();
$conn->close();

$url="../index.php?id=$id";
header("Location: $url");
?>