<?php
 $mysqli = mysqli_connect("localhost","root","","coders");
 if(!$mysqli){
 	die('Connection Failed - ' . mysqli_connect_error());
}
else{
header('location:../login/logs.html');
}
  ?>
