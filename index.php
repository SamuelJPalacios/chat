<?php
session_start();

$id_user=$_GET['id'];
if (isset($_SESSION)){
    $url="front/chat.php?id=$id_user";
    header("location: $url");
} else {
    header("Location: front/signup.php");
}

?>