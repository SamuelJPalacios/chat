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

$msjizq="SELECT * from chat order by hour ";
$msjdcha = "select * from chat where id = ".$conectedid."";
$resizq= $conn->query($msjizq);


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

        <div><class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"><img src="../images/pompom.png" width="150" height="150">
        </div>
</div>        
</div>
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
<span class="time">15/02/2019</span>
</p>
</li>

<?php }
// Cerrar la conexión
$conn->close();
?>
</ul>
</div>
</div>
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
<div class="selected-user">
<span> <span class="name">Wellcome to astral express</span></span>
</div>
<div class="chat-container">
/*cargA CONTENIDO DE MSJS */

leftEmisor=
rigthReceptor=

SQL= "SELECT * FROM mensajes where user=leftEmisor and user= rigthReceptor order by hour"

<ul class="chat-box chatContainerScroll">
<?php while ($rowizq = $resizq->fetch_array(MYSQLI_ASSOC)){ ?>
<li class="chat-left">
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name"><?php echo $rowizq['user']; ?></div>
</div>
<div class="chat-text">
    <?php echo $rowizq['mssg']; ?>
</div>
<div class="chat-hour"><?php echo $rowizq['hour']; ?> <span class="fa fa-check-circle"></span></div>
</li>
<?php } ?>


<li class="chat-right">
<div class="chat-hour">08:56 <span class="fa fa-check-circle"></span></div>
<div class="chat-text">Hi, Russell
<br> I need more information about Developer Plan.</div>
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name"><?php $_SESSION['user']; ?></div>
</div>
</li>


<li class="chat-left">
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name">Russell</div>
</div>
<div class="chat-text">Are we meeting today?
<br>Project has been already finished and I have results to show you.</div>
<div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div>
</li>
<li class="chat-right">
<div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div>
<div class="chat-text">Well I am not sure.
<br>I have results to show you.</div>
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
<div class="chat-name">Joyse</div>
</div>
</li>
<li class="chat-left">
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name">Russell</div>
</div>
<div class="chat-text">The rest of the team is not here yet.
<br>Maybe in an hour or so?</div>
<div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div>
</li>
<li class="chat-right">
<div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div>
<div class="chat-text">Have you faced any problems at the last phase of the project?</div>
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
<div class="chat-name">Jin</div>
</div>
</li>
<li class="chat-left">
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name">Russell</div>
</div>
<div class="chat-text">Actually everything was fine.
<br>I'm very excited to show this to our team.</div>
<div class="chat-hour">07:00 <span class="fa fa-check-circle"></span></div>
</li>
</ul>
<div class="form-group mt-3 mb-0">
<textarea class="form-control" rows="3" placeholder="Type your message here..."></textarea>text
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>

</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>