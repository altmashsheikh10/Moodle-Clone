<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body style="background-color:lightgrey">
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
        <li><a href="administratorhome.php">DASHBOARD</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
</div>
</nav>
<br>
  <h1 style="text-align:center"><h1 style="text-align:center"><b>ADMINISTRATOR MOODLE</b></h1></h1>
  <br><br>
      </div>
      <div style="border-style: double; border-color: black; border-width: 10px;">
        <h2 style="text-align:center">Add Faculty</h2>

        <form action="addFaculty.php" method="post">
          <div class="form-group">
            <label><h3>Name:</h3></label><br>
            <input class="col-lg-6" placeholder="Enter Name" type="text" name="user" class="form-control"><br>
          </div>

          <div class="form-group">
            <label><h3>Password:</h3></label><br>
            <input class="col-lg-6" placeholder="Enter Password" type="password" name="password" class="form-control"><br>
          </div>

          <div class="form-group">
            <label><h3>Course:</h3></label><br>
            <input class="col-lg-6" placeholder="Enter Course Code" type="text" name="course_1" class="form-control"><br>
          </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>