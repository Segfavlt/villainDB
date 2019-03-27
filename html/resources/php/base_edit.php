<?php
include_once ("session.php");
include ("connect.php");

$mysql = new mysqli($db_host, $db_user, $db_pass, $db);
if($mysql ->connect_errno) {
    echo 'Could not connect: ' . $mysql->connect_error;
}

// check if add is pressed and process it
if (isset($_POST['add'])){
  $region = $_POST['selected_region'];
  $query = "insert into base(region) values('$region')";
  echo($query);
  if (!mysqli_query($mysql, $query))
  {
    if ( mysqli_errno($mysql) == 1451) {
      $_SESSION['message']="Error no: " . mysqli_errno($mysql) ." - Error description: " . mysqli_error($mysql);
      $_SESSION['msg_type']="danger";
      mysqli_close($mysql);
      header("location: ../../villain/base.php");
    } else {
      $_SESSION['message']="Error no: " . mysqli_errno($mysql) ." - Error description: " . mysqli_error($mysql);
      $_SESSION['msg_type']="danger";
      mysqli_close($mysql);
      header("location: ../../villain/base.php");
    }
  } else {
    $_SESSION['message']="Success";
    $_SESSION['msg_type']="success";
    mysqli_close($mysql);
    header("location: ../../villain/base.php");
  }
}

// check if delete is pressed and process it
if (isset($_GET['delete'])){
  $id = $_GET['delete'];
  $query = "delete from base where id='$id'";

  if (!mysqli_query($mysql, $query))
  {
    if ( mysqli_errno($mysql) == 1451) {
      $_SESSION['message']="Error no: " . mysqli_errno($mysql) ." - Error description: " . mysqli_error($mysql);
      $_SESSION['msg_type']="danger";
      mysqli_close($mysql);
      header("location: ../../villain/base.php");
    } else {
      $_SESSION['message']="Error no: " . mysqli_errno($mysql) ." - Error description: " . mysqli_error($mysql);
      $_SESSION['msg_type']="danger";
      mysqli_close($mysql);
      header("location: ../../villain/base.php");
    }
  } else {
    $_SESSION['message']="Success!";
    $_SESSION['msg_type']="success";
    mysqli_close($mysql);
    header("location: ../../villain/base.php");
  }
}


?>