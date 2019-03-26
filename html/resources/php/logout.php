<?php
session_start();

  if ($_SESSION['authenticated']) {
    $user = $_SESSION['user'];

    session_unset();
    session_destroy();
    header('Location: /');
}
?>
