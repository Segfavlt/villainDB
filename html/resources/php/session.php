<?php

session_start();

if (!$_SESSION['authenticated']) {
  header('Location: /');
  exit;
}
#
#$time = $_SERVER['REQUEST_TIME'];
#
#/**
#* for a 60 minute timeout, specified in seconds
#*/
#$timeout_duration = 3600;
#
#/**
#* Here we look for the user's LAST_ACTIVITY timestamp. If
#* it's set and indicates our $timeout_duration has passed,
#* blow away any previous $_SESSION data and start a new one.
#*/
#if (isset($_SESSION['LAST_ACTIVITY']) &&
#   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
#    session_unset();
#    session_destroy();
#    header('Location: /');
#}
#
#/**
#* Finally, update LAST_ACTIVITY so that our timeout
#* is based on it and not the user's login time.
#*/
#$_SESSION['LAST_ACTIVITY'] = $time;
#
?>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap (check for updates) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
