<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("con.php");

    if (isset($_POST['submit'])) {
      $first=$_POST['First'];
      $last=$_POST['Last'];
      $usr=$_POST['usr'];
      $no=$_POST['no'];
      $gen=$_POST['Gen'];
      $email=$_POST['Email'];
      $pass=$_POST['pwd'];


        $sql = "INSERT INTO Users VALUES ('$first', '$last', '$usr', '$no', '$gen',  '$email', '$pass')";

          if(mysqli_query($mysqli, $sql)){
              echo 'New Record Has Been Added Successfully...';
              echo "<br><a href='index.php'>View Records</a>";
          }
          else{
              echo 'Error: '. $sql . "<br>" . mysqli_error($mysqli);
          }
        
      }
     ?>

  </body>
</html>
