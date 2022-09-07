<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

$_SESSION['username1']=$_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher Portal</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>  
        #notification{
      background-color: #F9F481;
      width: 300px;
      height:150px;
      border-radius: 5px

    }
    #announcements{
      background-color: #F9F481;
      width: 300px;
      height:150px;
      border-radius: 5px

    }  
        #btn{
            background-color: #4CAF50;
  border: none;
  border-radius: 3px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
    }
    footer {
      background-color:black;
      color: white;
      padding: 15px;
    }
    .bg-1 {
  background: #2d2d30;
  color: #bdbdbd;
}
.bg-1 p {color: white;}
.main { 
        text-align:center; 
    } 
    .marq { 
        padding-top:30px; 
        padding-bottom:30px; 
    } 
    .geek1 { 
        font-size:36px; 
        font-weight:bold; 
        color:black; 
        padding-bottom:10px; 
    } 
     </style>
</head>
<body style="background-color:lightcyan"> 
	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <ul class="nav navbar-nav">
        <li><a href="https://www.iitdh.ac.in/">IIT DHARWAD</a></li>
    </ul>
      <ul class="nav navbar-nav">
        <li><a href="teacher.php">DASHBOARD</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
</div>
</nav>
<br><br>
	<div class = "main"> 
        <div class="geek1" style="border:inset; border-color:gray; border-width: 10px;">TEACHER DASHBOARD</div>
    </div> <br>
    <br><br>
    <div class="container-fluid ">
  <a type="button" class="btn btn-success btn-lg btn-block" href="teacherlab.php"><?php echo $_SESSION['course_1'] ?></a><br>
  <a type="button" class="btn btn-success btn-lg btn-block" href="highmarks_lowatt.php">Students Profile Record</a><br>

<div class="container-fluid text-center  ">
        <div class="row">
            <div class="col-lg-6 well">
                <div class="row">
                    <div class="col-lg-12 well bg-1">
                    <p>ANNOUNCEMENTS</p>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12 well">
                <form action="announcements.php" method="post" enctype="multipart/form-data">
                  <textarea name="announcements" placeholder="Write your message" id="announcements"> </textarea><br><br>
                  <input type="submit" name="upload" value="Post It" id="btn">
                  </form></div>
            </div>
        </div>
        <div class="col-lg-6 well">
            <div class="row">
                <div class="col-lg-12 well bg-1">
                    <p>POST NOTIFICATIONS</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 well ">
                    <form action="notification.php" method="post" enctype="multipart/form-data">
    <textarea align="right" name="notification" placeholder="Write your message" id="notification"> </textarea><br><br>
    <input type="submit" name="upload" value="Post It" id="btn">
    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
	<br><br>
    <footer class="container-fluid text-center">
  <p>signed in as <?php echo $_SESSION['username'];?></p>
</footer>
</body>
</html>