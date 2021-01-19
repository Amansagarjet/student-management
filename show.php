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
    <!-- Link CSS File Here -->
    <title>Show</title>
  </head>
  <body style="overflow-x:hidden;">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <!-- Table start Here -->
    <div class="row bg-warning">
        <div class="col-md-10 col-lg-10">
            <h1 class="text-center text-primary font-weight-bold py-4">All Student Information</h1>
        </div>
        <div class="col-md-2 col-lg-2">
        <div class="mt-4">
          <a href="add.php"><button class="btn btn-success float-right ml-2">Add</button></a>
        <a href="logout.php"><button class="btn btn-danger float-right">Logout</button> </a>
         </div>
        </div>
    </div>
    
    
    <?php

    include'init.php';

    // Update Module Code Start Here
    if(isset($_POST['update'])){
      $userid = $_POST['id'];
      $username = $_POST['name'];
      $usercourse = $_POST['course'];
      $userphone = $_POST['phone'];
      $useremail = $_POST['email'];
      $updateqry = "update student set id='$userid',name='$username',course='$usercourse',phone='$userphone',email='$useremail' where id=$userid";
      $updateres = mysqli_query($con,$updateqry);
    }
    
    ?>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr class=" text-white">
        <th>Roll No</th>
        <th>Name</th>
        <th>Course</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action Perform</th>
      </tr>
    </thead>
    <tr>
      <tbody>
        <?php 

           // View Module Code Start Here
          $show = "select * from student";
          $display = mysqli_query($con,$show);
          while($res = mysqli_fetch_array($display)){ 
         ?>
       <td><?php echo $res['roll'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['course'];?></td>
        <td><?php echo $res['mobile'];?></td>
        <td><?php echo $res['email'];?></td>
        <td>
          <a href="update.php?updateid=<?php echo $res['id'];?>"><button class="btn btn-warning" type="submit" name="update" id="update">Edit</button></a>
          <a href="delete.php?deleteid=<?php echo $res['id'];?>"><button class="btn btn-danger" type="submit" name="delete" id = "delete">Delete</button></a>
        </td>
        
      </tbody>
    </tr>
    <?php } ?>
  </table>
  </body>
</html>