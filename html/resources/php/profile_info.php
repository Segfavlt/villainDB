<?php

include '/resources/php/connect.php';

$id = $_SESSION['user'];

if ($_SESSION['role'] == 'minion') {
  $basic_query = "select * from minion where id='$id'";

  $result = $conn -> query($basic_query);

  $basic_info = null;
  $adv_info = null;
  $table = null;

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $basic_info = $row;

  } else {
    echo "<script type='text/javascript'>alert('Could not find user');</script>";
  }

  if ($basic_info['class'] != '0') {
    switch($basic_info['class']) {
      case '1':
        $adv_query = "select * from spy where id = '$id'";
        break;
      case '2':
        $adv_query = "select * from muscle where id = '$id'";
        break;
      case '3':
        $adv_query = "select * from tech where id = '$id'";
        break;
    }

    $adv_result = $conn -> query($adv_query);
    if ($adv_result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $basic_info = $row;

    } else {
      echo "<script type='text/javascript'>alert('Could not find user');</script>";
    }


  }

} else if ($_SESSION['role'] == 'boss') {
  $query = "select * from boss hwere id='$id'";
  $result = $conn -> query($basic_query);

  $basic_info = null;

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $basic_info = $row;
  } else {
    echo "<script type='text/javascript'>alert('Could not find user');</script>";
  }

} else {
    echo "<script type='text/javascript'>alert('Could not find role');</script>";
}



?>
