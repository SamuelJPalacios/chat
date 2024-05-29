<?php 

$id = $_SESSION['id'];
$usuario = $_SESSION['user'];
$hora = new DateTime();
$mensaje = $_POST['message'];


require '../log/logcore.php';

//prepara la consulta 
$stmt = $conn->prepare('INSERT INTO chat (id, user, hour, mssg) VALUES (?, ?, ?, ?)');
$mensaje = $conn->prepare('$stmt');

//pasar el valor a la consulta
$mensaje->bind_param('ssss', $id, $usuario, $hora->format('H:i'), $mensaje);

//ejecutar la consulta 
$mensaje->execute();

?>