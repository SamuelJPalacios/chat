<?php 
require 'auth.php';
  
$id = $_GET['id'];

$sql="selec * from users where id=".$id."";

$usuario = $_SESSION['user'];
$hora = new DateTime();
$mensaje = $_POST['message'];

echo $mensaje;


require '../log/logcore.php';

//prepara la consulta 
$stmt = $conn->prepare('INSERT INTO chat (id, user, hour, mssg) VALUES (?, ?, ?, ?)');
$mensaje = $conn->prepare('$stmt');

//pasar el valor a la consulta
$mensaje->bind_param('ssss', $id, $usuario, $hora->format('H:i'), $mensaje);

//ejecutar la consulta 
$mensaje->execute();

?>