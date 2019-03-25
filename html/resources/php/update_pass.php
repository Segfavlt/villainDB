<?php
$pass = trim($_POST['pwd']);

$hash = password_hash($pass, PASSWORD_ARGON2I,
    ['memory_cost' => 4096, 'time_cost' => 4, 'threads' => 4]);

?>
