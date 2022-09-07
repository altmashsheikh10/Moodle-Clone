<?php

session_start();
$con = mysqli_connect('localhost','root');
if($con){
  echo"";
}else{
  echo " no connection"; 
}

mysqli_select_db($con, 'sessionpractical');

$q = " select * from signin ";

$result = mysqli_query($con, $q);

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
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

  <div class="container">
  <h2 style="text-align:center; border:inset; border-color:gray; border-width: 10px;"><b>Student Profile</b></h2>
  <br><br><br>
  <center><img src="user.png" height="200" width="200"/></center>
  <div style="border:double; border-color:black; border-width:8px">
      <h3>&emsp;Name : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; <?php echo $_SESSION['naam1']; ?><br><br>
      &emsp;Roll Number : &emsp;&emsp;&emsp;&ensp;<?php echo $_SESSION['username1']; ?><br><br>
      &emsp;Courses Enrolled : &emsp;
      <?php echo $_SESSION['course_11']; ?><br>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['course_21']; ?><br>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['course_31']; ?><br></h3>
</div>
    </div>
</body>
</html>
