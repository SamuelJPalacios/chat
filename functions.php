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
$send = $conection->prepare("INSERT INTO mensajes (usuario, mensaje) VALUES (?, ?)");
$send->bind_param("ss", $usuario, $mensaje);

// Ejecutar la consulta
if ($send->execute()) {
    echo "Mensaje enviado correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();


//Mandar a llamar los mensajes de la base de datos//
function mensajes($db, $usuario, $mensaje, $hour){
    $consulta = "SELECT * FROM pompom_db"
    return historial($consulta);
}

//Registro de un nuevo usuario//
//segundo cambio de prueba//
function nuevo($user, $passwd){
    $new = $conection->prepare("INSERT INTO mensajes (user, passwd) VALUES (?, ?)");
    $nuevo->bind_param("ss", $usuario, $contraseña);
})
?>



//prueba de git funcionnando?//