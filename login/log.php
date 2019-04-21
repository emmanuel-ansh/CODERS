<?php
session_start();
include("con.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST['submit']))
    {
      $sql="Select * from `Users` where email='" .$_POST['Email']. "' and pass='" .$_POST['pwd']. "' ";
     $result=mysqli_query($mysqli,$sql);
      $row=mysqli_fetch_array($result);
      if(is_array[$row])
      {
        $_SESSION['x']=$row['ID'];
      }
      $_SESSION['id']=$_POST['Email'];
        /*if(!$_SESSION['id'])
        {*/
      header('Location: http://localhost/CODERS/profile/home.php');

        //}
      }

      else {
        echo "error";
      }
    //} ?>

  </body>
</html>
