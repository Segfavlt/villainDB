<?php
include_once '../resources/php/session.php';

if ($_SESSION['role'] != 'villain') {
  header('Location: /success.php');
}
?>


Hello Master.
