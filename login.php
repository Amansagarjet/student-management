/<?php

session_start();

include'init.php';


if(isset($_REQUEST['submit'])){

    $username = $_REQUEST['name'];
    $password = mysqli_real_escape_string($con, $_REQUEST['psw']);

    $sql = "select * from admin where username ='$username' and psw ='$password' ";
    $res = mysqli_query($con,$sql);
    $rows = mysqli_num_rows($res);
    if($rows==1){ 

        header('location:index.php');
        $_SESSION['username'] = $username;

    }else{   ?>

    <script>
        alert('Login Failed! Please Try Again.');
        window.open('login.php');
    </script>
        <?php
      
    }

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

    <title>Login Page</title>
  </head>
  <body class="bg-warning">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <!-- Login Form Start Here -->

    <style>
        .loginform{
            background-color: white;
            padding: 50px;
        }
        .wlcm h1{
            font-size: 55px;
        }
    </style>

<br><br>
<div class="wlcm">
    <h1 class="font-weight-bold text-primary text-center">Welcome To Student Management System</h1>
</div>


    <br><br>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                
            </div>
            <div class="col-md-4 col-lg-4 loginform">
                <h1>Login Here</h1>
                <form action="login.php" method="POST" class="mt-4">
                    <div class="form-group">
                        <label for="username">Enter username</label>
                        <input type="text" name="name" id="name" placeholder="Username" class="form-control">
                        <span class="text-danger font-weight-bold" id="name_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="psw">Enter password</label>
                        <input type="password" name="psw" id="psw" placeholder="Password" class="form-control">
                        <span class="text-danger font-weight-bold" id="psw_error"></span>
                    </div>
                    <a href="register.php"><p>Create an account</p></a>
                    <button class="btn btn-primary rounded-0 btn-lg btn-block" name="submit" type="submit" onclick="return validation()">Login</button>
                </form>
            </div>
            <div class="col-md-4 col-lg-4">
                
            </div>
        </div>
        <script>
            function validation(){
                var name = document.getElementById('name').value;
                var pass = document.getElementById('name').value;

                // Validation For Name Start Here

                if(name==""){
                    document.getElementById('name_error').innerHTML = "Please fill username";
                    // alert('Please fill username');
                    return false;
                }

                if(!isNaN(name)){
                    document.getElementById('name_error').innerHTML = "Please fill only alphabets";
                    return false;
                }

                // Validation For Password Start Here

                if(pass==""){
                    document.getElementById('psw_error').innerHTML = "Please fill password";
                    return false;
                }

                if(pass.length<4){
                    document.getElementById('psw_error').innerHTML = "Password minimum 4 charchters";
                    return false;
                }
            }
        </script>
  </body>
</html>