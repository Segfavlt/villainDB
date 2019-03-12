<?php
include 'connect.php';

$conn = new mysqli($db_host, $db_user, $db_pass, $db);

$set_logged_out = "update users set logged_in=0 where id='$_SESSION['user']'";

$log_out_request = $conn -> query($set_logged_out);

session_destroy();




?>
