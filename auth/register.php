<?php
//prepara el INSERT INTO 
$stmt = $registro -> prepare("INSERT INTO users (id, username, email, pssw) VALUES (?,?,?,?)") ;

//obtiene los datos del nuevo usuario
