<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>bs4 simple chat app - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/8186d58590.js" crossorigin="anonymous"></script>   
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="page-title">
    <div class="row gutters">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <i class="far fa-comment" style="color: #000000;"></i>
        <h5 class="title">Chat App</h5>
    </div>
    <i class="fas fa-chalkboard-teacher" style="color: #31af18;"></i>
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
<li class="person" data-chat="person1">
<div class="user">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<span class="status busy"></span>
</div>
<p class="name-time">
<span class="name">Juan</span>
<span class="time">15/02/2019</span>
</p>
</li>
<li class="person" data-chat="person1">
<div class="user">
<img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
<span class="status offline"></span>
</div>
<p class="name-time">
<span class="name">Steve Bangalter</span>
<span class="time">15/02/2019</span>
</p> 
</li>
<li class="person active-user" data-chat="person2">
<div class="user">
<img src="https://www.bootdey.com/img/Content/avatar/avatar2.png" alt="Retail Admin">
<span class="status away"></span>
</div>
<p class="name-time">
<span class="name">Peter Gregor</span>
<span class="time">12/02/2019</span>
</p>
</li>
<li class="person" data-chat="person3">
<div class="user">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<span class="status busy"></span>
</div>
<p class="name-time">
<span class="name">Jessica Larson</span>
<span class="time">11/02/2019</span>
</p>
</li>
<li class="person" data-chat="person4">
<div class="user">
<img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
<span class="status offline"></span>
</div>
<p class="name-time">
<span class="name">Lisa Guerrero</span>
<span class="time">08/02/2019</span>
</p>
</li>
<li class="person" data-chat="person5">
<div class="user">
<img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
<span class="status away"></span>
</div>
<p class="name-time">
<span class="name">Michael Jordan</span>
<span class="time">05/02/2019</span>
</p>
</li>
</ul>
</div>
</div>
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
<div class="selected-user">
<span>To: <span class="name">Emily Russell</span></span>
</div>
<div class="chat-container">
<ul class="chat-box chatContainerScroll">
<li class="chat-left">
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name">Russell</div>
</div>
<div class="chat-text">Hello, I'm Russell.
<br>How can I help you today?</div>
<div class="chat-hour">08:55<i class="far fa-check-circle" style="color: #13dd2b;"></i>   </div>



</li>
<li class="chat-right">
<div class="chat-hour">08:56 <i class="far fa-check-circle" style="color: #13dd2b;"></i> </div>
<div class="chat-text">Hi, Russell
<br> I need more information about Developer Plan.</div>
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name">Sam</div>
</div>
</li>
<li class="chat-left">
<div class="chat-avatar">
<img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
<div class="chat-name">Russell</div>
</div>
<div class="chat-text">Are we meeting today?
<br>Project has been already finished and I have results to show you.</div>
<div class="chat-hour">08:57 <i class="far fa-check-circle" style="color: #13dd2b;"></i> </div>
</li>
<li class="chat-right">
<div class="chat-hour">08:59 <i class="far fa-check-circle" style="color: #13dd2b;"></i> </div>
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
<div class="chat-hour">08:57 <i class="far fa-check-circle" style="color: #13dd2b;"></i> </div>
</li>
<li class="chat-right">
<div class="chat-hour">08:59 <i class="far fa-check-circle" style="color: #13dd2b;"></i> </div>
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
<div class="chat-hour">07:00 <i class="far fa-check-circle" style="color: #13dd2b;"></i> </div>
</li>
</ul>
<div class="form-group mt-3 mb-0">
    <div class="input-group">
        <textarea class="form-control" rows="3" placeholder="Type your message here..."></textarea>
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">Enviar</button>
        </div>
    </div>
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