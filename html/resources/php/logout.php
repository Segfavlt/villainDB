<?php
include 'connect.php';
session_start();
$conn = new mysqli($db_host, $db_user, $db_pass, $db);

  if ($_SESSION['authenticated']) {
    $user = $_SESSION['user'];

    $set_logged_out = "update users set logged_in=0 where id='$user'";

    $log_out_request = $conn -> query($set_logged_out);

    session_destroy();
    var_dump($_SESSION);
    header('Location: /');
}
?>
