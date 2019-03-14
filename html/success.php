<?php
session_start();
if (isset($_SESSION['authenticated'])) {
  switch ($_SESSION['role']) {
    case 'villain':
      header('Location: villain/index.php');
      exit;
      break;
    case 'boss':
      header('Location: boss/index.php');
      exit;
      break;
    case 'minion':
      header('Location: minion/index.php');
      exit;
      break;
    default:
      header('Location: /');
      break;
  }
} else {
  header('Location: /');
}
?>
