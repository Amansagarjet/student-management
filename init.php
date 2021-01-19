<?php

error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$db = "training";

$con = mysqli_connect($server,$username,$password,$db);

if(!$con){
	echo "Please Check Init File..";
}
?>