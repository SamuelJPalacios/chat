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

$msjizq = "SELECT * FROM chat WHERE id != " . $conectedid;
$msjdcha = "SELECT * FROM chat WHERE id = " . $conectedid;

$resizq = $conn->query($msjizq); 
if ($resizq === false) {
    die ("Error en mensaje izquierda: " . $conn->error);
}

$resder = $conn->query($msjdcha);
if ($resder === false) {
    die ("Error en mensaje derecha ". $conn->error);
}

while($izq = $resizq->fetch_assoc()){
    $idzq = $izq["id"];
    $userzq = $izq["user"];
    $hourzq = $izq["hour"];
    $mssgzq = $izq["mssg"];
    echo "BURBUJA IZQUIERDA = ID: $idzq, Usuario: $userzq, Hora: $hourzq, Mensaje: $mssgzq<br>";    
}

while($der = $resder->fetch_assoc()){
    $idder = $der["id"];
    $userder = $der["user"];
    $hourder = $der["hour"];
    $mssgder = $der["mssg"];
    echo "BURBUJA DERECHA = ID: $idder, Usuario: $userder, Hora: $hourder, Mensaje: $mssgder<br>";
}

$nombres_usuarios = "SELECT user FROM users";
$resultado = $conn->query($nombres_usuarios);

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
                                <?php while ($rowusers = $resultado->fetch_array(MYSQLI_ASSOC)){ ?>
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
                                <?php while ($rowizquierdo = $resizq->fetch_array(MYSQLI_ASSOC)){ ?>
                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name"><?php echo $userzq; ?></div>
                                        </div>
                                        <div class="chat-text"><?php echo $mssgzq; ?></div>
                                        <div class="chat-hour"><?php echo $hourzq; ?><span class="fa fa-check-circle"></span></div>
                                    </li>
                                <?php } ?>

                                <?php while ($rowder = $resder->fetch_array(MYSQLI_ASSOC)){?>
                                    <li class="chat-right">
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name"><?php echo $userder; ?></div>
                                        </div>
                                        <div class="chat-text"><?php echo $mssgder;?></div>
                                        <div class="chat-hour"><?php echo $hourder;?><span class="fa fa-check-circle"></span></div>  
                                    </li>
                                <?php }?>
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