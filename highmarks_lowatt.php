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
  <style>
    footer {
      background-color:black;
      color: white;
      padding: 15px;
    }
    </style>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
  <h2 style="border:inset; border-color:gray; border-width: 10px; text-align:center;"><b>Student Profile Record</b></h2>
  <br><br><br>
  <table align="center" class="table">
    <t>
      <th> ID </th>
      <th> Marks </th>
      <th colspan="2"> Attendence </th>
    </t>
    <?php
      while ($row = $result->fetch_assoc()) {
        if(strcasecmp($row['designation'], "student")==0){
       ?>
       <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['marks_course1'] ?></td>
        <td><?php echo $row['attendence_course1']; ?></td>
       </tr>
    <?php
      }
    }
    ?> 
  </table></div>

  <?php
$q = " select * from signin ";

$result = mysqli_query($con, $q);
?>

  <div class="container">
  <h2 style="border:inset; border-color:gray; border-width: 10px; text-align:center;"><b>Students with high marks</b></h2>
  <br><br><br>
  <table align="center" class="table">
    <t>
      <th> ID </th>
      <th> Marks </th>
    </t>
    <?php
      while ($row = $result->fetch_assoc()) {
        if(strcasecmp($row['designation'], "student")==0){
          if($row['marks_course1']>=85){
       ?>
       <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['marks_course1'] ?></td>
       </tr>
    <?php
      }
    }
    }
    ?> 
  </table></div>

<?php
$q = " select * from signin ";

$result = mysqli_query($con, $q);
?>

  <div class="container">
  <h2 style="border:inset; border-color:gray; border-width: 10px; text-align:center;"><b>Students with low attendence</b></h2>
  <br><br><br>
  <table align="center" class="table">
    <t>
      <th> ID </th>
      <th> Marks </th>
    </t>
    <?php
      while ($row = $result->fetch_assoc()) {
        if(strcasecmp($row['designation'], "student")==0){
          if($row['attendence_course1']<=34){
       ?>
       <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['attendence_course1'] ?></td>
       </tr>
    <?php
      }
    }
    }
    ?> 
  </table></div>

  <footer class="container-fluid text-center">
  <p><a href="teacher.php">GO TO DASHBOARD</p>
</footer>
</body>
</html>
