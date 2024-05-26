<?php
if ($_SESSION['conectado'] === true){
    header("Location: front/chat.php");
} else {
    header("Location: front/signup.php");
}
?>