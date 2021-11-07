<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<!--<style>
  .navbar-inverse,.navbar-fixed-top{
    background-color: rgb(151,216,127);
  }
</style>-->

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CSE 311 Project</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="HomePage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Patient <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Form 1.php">Get Admited</a></li>
          <li><a href="Doctor_List.php">See Our Doctors</a></li>
          <li><a href="Nurse_List.php">See Our Nurses</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Doctor <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="DoctorpatienLogin.php">Doctor Log In</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nurse <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="NursepatienLogin.php">Nurse Log In</a></li>
          </ul>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
