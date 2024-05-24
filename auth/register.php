<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root"; // Usualmente es "root" en XAMPP
$password = ""; // En XAMPP, la contraseña por defecto es vacía
$dbname = "mi_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($nombre_usuario) && !empty($email) && !empty($password)) {
    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar y vincular
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, email, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("sss", $nombre_usuario, $email, $hashed_password);

    // Ejecutar la declaración
    if ($stmt->execute()) {
        echo "Registro exitoso. Bienvenido, " . htmlspecialchars($nombre_usuario) . "!";
    } else {
        echo "Error en la ejecución de la consulta: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
} else {
    echo "Por favor, completa todos los campos.";
}

$conn->close();
?>
