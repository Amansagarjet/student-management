<?php 

include'init.php';

$id = $_GET['deleteid'];
$sql = "DELETE FROM `student` WHERE id = $id";
$res = mysqli_query($con,$sql);

if($res){
    header('location:show.php');
}
?>