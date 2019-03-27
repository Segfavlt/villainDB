<?php
include_once ("session.php");
include ("connect.php");

$mysql = new mysqli($db_host, $db_user, $db_pass, $db);
if($mysql ->connect_errno) {
    echo 'Could not connect: ' . $mysql->connect_error;
}

// check if delete is pressed and process it
if (isset($_GET['delete'])){
  $id = $_GET['delete'];
  $query = "delete from base where id=$id";
  // $mysql->query($query);

  if (!mysqli_query($mysql, $query))
  {
    if ( mysqli_errno($mysql) == 1451) {
      echo("Foreign Key Error: 1451 Error description: " . mysqli_error($mysql));
    } else {
      echo("Error no: " . mysqli_errno($mysql) ."Error description: " . mysqli_error($mysql));
    }
  } else {
    header("location: ../../villain/base.php");
  }

  mysqli_close($mysql);
  //header("location: ../../villain/base.php");
}


?>