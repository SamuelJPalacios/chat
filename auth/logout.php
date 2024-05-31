<?php
// logout.php
session_start();
session_unset();  // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión

// Redirige al usuario a la página de login o a la página principal
header("Location: ../front/login.php");
exit;
?>