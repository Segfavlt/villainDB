<?php
include '/resources/php/session.php';

if ($_SESSION['access'] != 'minion') {
  header('Location: /success.php');
}
?>


Hello slave.
