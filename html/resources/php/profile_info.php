<?php
include("session.php");
include("connect.php");

$mysql = new mysqli($db_host, $db_user, $db_pass, $db);
if($mysql ->connect_errno) {
    echo 'Could not connect: ' . $mysql->connect_error;
}
$id = $_SESSION['user'];

$basic_info = null;
$adv_info = null;
$class = "Minion";

switch($_SESSION['role']) {
  case 'minion':
    $basic_info = minion_pop($mysql);
    $class = set_class($mysql, $basic_info);
    $adv_info = adv_pop($mysql, $id);
    break;
  case 'boss':
    $basic_info = boss_pop($mysql);
    break;
  default:
    echo "<script type='text/javascript'>alert('Could not find role');</script>";
    break;
  }


function set_class($conn, $info) {
  $rank = $info['class'];
  $query = "select * from advanced where rank='$rank'";

  $class_result = $conn -> query($query);
  if ($class_result->num_rows > 0) {
    $row = $class_result->fetch_assoc();
    $class = $row;

    return ucfirst($class['class']);
  } else {
    echo "<script type='text/javascript'>alert('Could not find class');</script>";
    return "Minion";
  }
}

function adv_pop($conn, $ident) {
  switch ($classval) {
  case "1":
    $adv_query = "select * from spy where id='$ident';";
    break;
  case "2":
    $adv_query = "select * from muscle where id='$ident'";
    break;
  case "3":
    $adv_query = "select * from tech where id='$ident'";
    break;
  default:
    return null;
    break;
  }

  echo "<script type='text/javascript'>alert('".$class."');</script>";
  $adv_result = $conn -> query($adv_query);
  if ($adv_result->num_rows > 0) {
    $row = $adv_result->fetch_assoc();
    $adv_info = $row;

    return $adv_info;
  } else {
    echo "<script type='text/javascript'>alert('Could not find user adv');</script>";
    return null;
  }
}


function minion_pop($conn) {
  $id = $_SESSION['user'];
  $query = "select * from minion where id='$id'";
  $result = $conn -> query($query);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $basic_info = $row;

  } else {
    echo "<script type='text/javascript'>alert('Could not find user basic');</script>";
  }

  return $basic_info;
}

function boss_pop($conn) {
  $id = $_SESSION['user'];
  $query = "select * from boss where id='$id'";
  $result = $conn -> query($query);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $basic_info = $row;
  } else {
    echo "<script type='text/javascript'>alert('Could not find user');</script>";
  }
  return $basic_info;
}

?>
