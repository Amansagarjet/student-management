<?php

include'init.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $psw = sha1($_POST['psw'])  ;

    $qry = "INSERT INTO admin (username,email,phone,psw) Values ('$name','$email','$phone','$psw');";
    $res = mysqli_query($con,$qry);
    if($res==true) { 
    ?>
    <script>
        alert("Your Account has been created successfully");
        window.open('login.php');
    </script>
    <?php
    unset($res);
    }else{
        ?>
        <script>
            alert("Registration Failed!");
            window.open('register.php');
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

    <title>Register Form</title>
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
    <!-- Form Code Start Hrere -->

    <div class="row">
        <div class="col-md-4 col-lg-4">

        </div>
        <div class="col-md-4 col-lg-4 bg-white" style="padding: 50px; margin-top:5vh;">
        <h1 class="my-4">Register Here</h1>
        <form action="register.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Username" class="form-control">
            <span id="name_error" class="text-danger font-weight-bold"></span>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
            <span id="email_error" class="text-danger font-weight-bold"></span>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" placeholder="Enter Phone" class="form-control">
            <span id="phone_error" class="text-danger font-weight-bold"></span>
        </div>
        <div class="form-group">
            <label for="psw">Password</label>
            <input type="password" name="psw" id="psw" placeholder="Enter Password" class="form-control">
            <span id="psw_error" class="text-danger font-weight-bold"></span>
        </div>
        <button class="btn btn-success rounded-0 mt-4 btn-lg btn-block" name="submit" type="submit" onclick="return validation()">Create an account</button>
        <a href="login.php" type="button" class="btn btn-primary rounded-0 mt-2 btn-lg btn-block">Login</a>
    </form>
        </div>
        <div class="col-md-4 col-lg-4">

        </div>
    </div>
    <script>

        // Form Data Resubmission Code Write Here
        
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }



        function validation(){
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var psw = document.getElementById('psw').value;

        // Name Field Validation

        if(name==""){
            document.getElementById('name_error').innerHTML = "Please Fill Name";
            return false;
        }
        if(!isNaN(name)){
            document.getElementById('name_error').innerHTML = "Only Alphabets Are Allowed";
            return false;
        }

        // Email Field Validation

        if(email==""){
            document.getElementById('email_error').innerHTML = "Please Fill Email";
            return false;
        }
        if(email.indexOf('@') <=0){
            document.getElementById('email_error').innerHTML = "Invalid Email Please Fill Valid Email";
            return false;
        }
        if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
                document.getElementById('email_error').innerHTML = "invalid email";
                return false;
            }

        // Phone Field Validation

        if(phone==""){
            document.getElementById('phone_error').innerHTML = "Please Fill Mobile Number";
            return false;
        }
        if(phone.length!=10){
            document.getElementById('phone_error').innerHTML = "Only 10 Digits Are Allowed";
            return false;
        }
        if(isNaN(phone)){
            document.getElementById('phone_error').innerHTML = "Only Digits Are Allowed";
            return false;
        }

        // Password Field validation

        if(psw==""){
            document.getElementById('psw_error').innerHTML = "Please Fill Password";
            return false;
        }
        if(psw<=8){
            document.getElementById('psw_error').innerHTML = "Please Fill Minimum 8 Digit Password";
            return false;
        }
    }
    </script>
  </body>
</html>