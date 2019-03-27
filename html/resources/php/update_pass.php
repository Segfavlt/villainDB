<?php
session_start();
include('connect.php');

$id = $_SESSION['user'];

$pass1 = trim($_POST['pwd1']);
$pass2 = trim($_POST['pwd2']);
$hash = null;
if (!strcmp($pass1, $pass2)) {
  $hash = password_hash($pass1, PASSWORD_ARGON2I,
      ['memory_cost' => 4096, 'time_cost' => 6, 'threads' => 4]);
} else {
  $_SESSION['passdiff'] = true;
  header('Location: /profile.php');
  exit;
}


$conn = new mysqli($db_host, $db_user, $db_pass, $db);
try {
  $conn->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);

  $update_password = "update users set passwd='$hash' where id='$id'";

  $update_result = $conn->query($update_password);
  $conn->commit();
  $_SESSION['passdiff'] = false;
  $conn->close();
} catch (exception $e) {
  $conn->rollback();
  echo "<script type='text/javascript'>alert('$e')</script>";
  $conn->close();
}
header('Location: /profile.php');
exit;
?>
