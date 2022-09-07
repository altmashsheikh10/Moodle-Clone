<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
$_SESSION['username2'] = $_SESSION['username1'] ;

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_SESSION['course_1']; ?></title>
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
.bg-1 p {color:white;}
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
      #discussion{
      background-color: #F9F481;
      width: 300px;
      height:150px;
      border-radius: 5px;

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

    <br><br>
    <?php
$total="";
$total2="";
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'sessionpractical');
$query = " select * from signin ";

$result = mysqli_query($con, $query);
    $result = mysqli_query($con, $query);
    $i=1;

      while ($row = $result->fetch_assoc()) {
        if((strcasecmp($row['course_1'], $_SESSION['course_11'])==0)&&(strcasecmp($row['designation'], 'teacher')==0)){
          if($i>0){
        $notifier=$row['name'];
        $message1= $row['notification1']; 
        $announce1=$row['announcements1'];
        $message1=$notifier.' : '.$message1;
        $announce1='  '.$announce1;
        $total=$message1.$total;
        $total2=$announce1.$total2;
        $i=$i-1;
        ?>
        <?php
    }
  }
}

?>
    <div class = "main"> 
        <div class="geek1" style="border:inset; border-color:gray; border-width: 10px;"><?php echo $_SESSION['course_1']; ?></div>
    </div> <br>
    <div class="container-fluid text-center  ">
        <div class="row">
            <div class="col-lg-6 well">
                <div class="row">
                    <div class="col-lg-12 well bg-1">
                    <p>ASSIGNMENTS</p>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12 well">
                    <a href="lab.php">LAB ASSIGNMENT-1 due 22/11/2021</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 well">
            <div class="row">
                <div class="col-lg-12 well bg-1">
                    <p>Announcements</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 well ">
                    <p>The End-sem Exam will start from 9:00AM to 12:00PM.</p>
                </div>
            </div>
        </div>
    </div>
    <center><h4>Comment Section</h4></center>
        <form>
    <textarea name="discussion" placeholder="Write your message" id="discussion" style="width:1000px; height:100px"> </textarea><br><br>
    <input type="submit" name="upload" value="Send" id="btn">
    </form>
    <br>

</div>

</body>
</html>