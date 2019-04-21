<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="A hub for all the coders">
    <meta name="keywords" content="code,program,solutions,java,c">
    <meta name="author" content="ANSHUL TIGGA">
    <title>CODER'S BAY|HOME</title>
    <link rel="stylesheet" href="stylehome.css" type="text/css">
  </head>
  <body>
    <div class="hd">
      <div class="container">
      <div id="brand">
        <h1><li><a href="../Home/index.php"><span class="high">CODER'S</span> BAY</a></li></h1>
      </div>
      <nav>
        <ul>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="settings.html">Settings</a></li>
            <li><a href="help.html">Help</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
      </nav>
    </div>
  </div>


  <div class="back">
    <div class="left">
        <?php
       include 'con.php';
         echo $_SESSION['id']."<br>";

        $sql1="Select * from `photos` where id='" .$_SESSION['x']. "'";
        $result=mysqli_query($mysqli,$sql1);
         $row=mysqli_fetch_array($result);
         if(is_array[$row])
         {
           //echo $row['pic'];
           echo "<img src='Image/".$row['pic']."'width='300' height='200' />";
         } ?>
    </div>
    <div class="right">
      HELLO
      <p><?php
        echo $_SESSION['x']."<br>";
       ?> </p>
     </div>
    </div>
