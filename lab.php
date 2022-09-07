<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab Assignments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    footer {
      background-color:black;
      color: white;
      padding: 15px;
    }
    .bg-1 {
  background: #2d2d30;
  color: #bdbdbd;
}
.bg-1 p {color: #2d2d30;}
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
        <li><a href="home.php">DASHBOARD</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="studentprofile.php">PROFILE</a></li>
    </ul>
  </div>
</div>
</nav>


<div class = "main"> 
        <div class="geek1" style="border:inset; border-color:gray; border-width: 10px;">LAB ASSIGNMENT-1</div>
    </div>

    <form class="form-inline" action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="f1"><h2> Select file to upload</h2></label>
    <input type="file" name="file" class="form-control-file" id="f1"><br>
    <button type="submit" name="submit" value="Upload" class="btn btn-primary">SUBMIT</button>
</div>
    </form>

</body>
</html>