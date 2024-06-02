<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PomPom Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
require '../log/logcore.php';
$conectedid = $_GET['id'];

// Consulta única para obtener todos los mensajes, ordenados por ID
$mensajes = "SELECT * FROM chat ORDER BY hour";
$resultado_mensajes = $conn->query($mensajes);

if ($resultado_mensajes === false) {
    die ("Error en la consulta de mensajes: " . $conn->error);
}

$nombres_usuarios = "SELECT user FROM users";
$resultado_usuarios = $conn->query($nombres_usuarios);

?>

<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<div class="container">
    <div class="page-title">
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <style>
                    .title {
                        text-align: right;
                    }
                </style>
            </div>
                <div><class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"><img src="../images/pompom.png" width="150" height="150"></div>
        </div>        
    </div>
</div>

<a href="../auth/logout.php">Cerrar Sesión</a>

<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card m-0">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                        <div class="users-container">
                            <div class="chat-search-box">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search">
                                        <div class="input-group-btn">       
                                            <button type="button" class="btn btn-info">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            <ul class="users">
                                <?php while ($rowusers = $resultado_usuarios->fetch_array(MYSQLI_ASSOC)){ ?>
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status busy"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name"><?php echo $rowusers['user']; ?></span>
                                        </p>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">

                        <div class="selected-user">
                            <span class="name">WELLCOME TO THE ASTRAL EXPRESS</span>
                        </div>

                        <div class="chat-container">
                            <ul class="chat-box chatContainerScroll">
                            <?php while ($mensaje = $resultado_mensajes->fetch_array(MYSQLI_ASSOC)){ ?>
                                <?php if ($mensaje['id'] == $conectedid) { ?>
                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name"><?php echo $mensaje['user']; ?></div>
                                        </div>
                                        <div class="chat-text"><?php echo $mensaje['mssg']; ?></div>
                                        <div class="chat-hour"><?php echo $mensaje['hour']; ?><span class="fa fa-check-circle"></span></div>
                                    </li>
                                <?php } else { ?>
                                    <li class="chat-right">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name"><?php echo $mensaje['user']; ?></div>
                                        </div>
                                        <div class="chat-text"><?php echo $mensaje['mssg']; ?></div>
                                        <div class="chat-hour"><?php echo $mensaje['hour']; ?><span class="fa fa-check-circle"></span></div>  
                                    </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                            
                            <form action="../auth/send.php ?>" method="POST">
                                <textarea id="textarea" name="message" rows="2" cols="20"></textarea>
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
    <?php
    $conn->close();
    ?>
</div>
</body>
</html>