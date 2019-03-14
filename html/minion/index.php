<?php
include_once '../resources/php/session.php';

if ($_SESSION['role'] != 'minion') {
  header('Location: /success.php');
}
?>

Hello slave.
