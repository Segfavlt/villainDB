<?php
session_start();
if (!$_SESSION['authenticated']) {
  header('Location: http://villaindb.com/');
}
?>

Hello slave.
