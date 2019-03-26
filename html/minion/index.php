<?php
include "../resources/php/session.php";

if ($_SESSION['role'] != 'minion') {
  header('Location: /success.php');
}
?>

Hello slave.
