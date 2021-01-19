<?php

session_start();
if($_SESSION['username'] == true){
}else{
    header('location:login.php');
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Student Managemt System Dashboard</title>
  </head>
  <body class="">
    <h1 class="text-center text-primary font-weight-bold py-4 bg-warning">Student Management System</h1>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    

<h4 class="pl-3 text-info float-left">Welcome, <strong><?php echo $_SESSION['username']; ?></strong></h4>
<br><br><br>
  <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 mt-2">
          <center><a href="add.php"><img src="assets/img/add1.jpg" alt="show all" title="Add New Student" height="270"> </a></center>
          <center><a href="add.php"><button class="btn btn-warning mt-4 rounded-0">Add New Student</button></a></center>
        </div>
        <div class="col-md-6 col-lg-6">
            <center><a href="show.php"><img src="assets/img/inf.jpg" alt="show all" title="Show All Details"> </a></center>
            <center><a href="show.php"><button class="btn btn-warning rounded-0 mt-2">Show All Details</button></a></center>
        </div>
    </div>
  </div>

<center><a href="logout.php"><button class="btn btn-danger rounded-0">Logout</button></a> </h4></center>
  </body>
</html>