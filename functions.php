<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$db = 'pompom_db';
$user = 'usuario';
$pass = '';

// Crear la conexión
$conection = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conection->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario (asumiendo que se envían mediante POST)
$usuario = $_POST['usuario'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta
$stmt = $conn->prepare("INSERT INTO mensajes (usuario, mensaje) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $mensaje);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Mensaje enviado correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
