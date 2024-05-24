<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000000;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
<img src="images/pompom2.jpg" alt ="img del pompom">
    <form action="tu_pagina_de_procesamiento.php" method="post">
        <h2>LOGIN</h2>
        <input type="text" name="usuario" placeholder="User" required>
        <input type="password" name="Contraseña" placeholder="password" required>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
