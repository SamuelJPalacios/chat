<?php
require '../log/logcore.php';

//$connection=mysqli_connect('localhost','root','','pompom_db');
//prepara la consulta solo par el usuario en cuestion
$stmt = $conn->prepare('SELECT id, user, pssw FROM users WHERE user = ?');

//obtiene el contenido de las variables 
$username = htmlspecialchars($_POST['usuario']);
$password = password_hash($_POST['passkey'], PASSWORD_DEFAULT); //hash para la contraseña

//transfiere el valor a la consulta
$stmt ->bind_param('s', $username);

//ejecuta la consulta
$stmt->execute();

//obtiene los resultados
$result = $stmt->get_result();

if($result->num_rows ===1) {
    //verifica la contraseña en la db
    $row = $result->fetch_assoc();
    if (password_verify($_POST['passkey'], $row['pssw'])){
        //si la contraseña coincide
        $_SESSION['conectado'] = true;
        $_SESSION['user'] = $username;
        $_SESSION['id'] = $row['id']; //almacena el id del usuario para cuando se neecesite

        $idusr= $row['id'];
        $url="../index.php?id=$idusr";
        //redirecciona al chat
        header("Location: $url");
    } else {
        //si la contraseña no coincide
        echo "Error en la contraseña";
        echo "<br>";
        echo "<a href = 'front/login.php'>Volver a intentar</a>";
    }
} else {
    //si los datos no coinciden
    echo "Error en los datos";
    echo "<br>";
    echo "<a href = 'front/login.php'>Volver a intentar</a>";
}
$stmt->close();
$connection->close();
?>