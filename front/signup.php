<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            margin: 10px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        h2 {
            margin-top: 0;
        }
        form{
            width: 100%;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 98%;
            padding: 10px;
            background-color: #002fe9;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #ff0000;
        }
        .message {
            margin: 10px 0;
            padding: 10px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">        
        <h2>Sign Up</h2>
        <img src = "images/pompom2.jpg" alt = "imagen de pompom">        
        <form action="../auth/register.php" method="post">
            <input type="text" id="nombre_usuario" name="usuario" placeholder="NOMBRE">
            <input type="email" id="email" name="email" placeholder="EMAIL" required>
            <input type="password" id="password" name="passkey" placeholder="PASSWORD" required>
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
