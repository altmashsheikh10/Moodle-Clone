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
<body style="background-color:lightgrey;">
  <center><img src="Moodle-Logo-RGB.png" height="200" width="800" class="animated swing delay-1s" alt="Transparent Logo" id="animated-img1"></center>
<br><br>
<div style="border-style: double; border-color: black; border-width: 10px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1>Login</h1>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input placeholder="Enter Username" type="text" name="user" class="form-control">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input placeholder="Enter password" type="password" name="password" class="form-control">
          </div>
          
          <button type="submit" class="btn btn-primary">Login</button>
          <br><br>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>
</html>