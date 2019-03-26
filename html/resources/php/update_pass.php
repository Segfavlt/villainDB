<?php
include('connect.php');

$id = $_SESSON['user'];

$pass = trim($_POST['pwd']);

$hash = password_hash($pass, PASSWORD_ARGON2I,
    ['memory_cost' => 4096, 'time_cost' => 4, 'threads' => 4]);




$conn = new mysqli($db_host, $db_user, $db_pass, $db);

$update_password = "update users set passwd='$hash' where id='$id'";

?>
