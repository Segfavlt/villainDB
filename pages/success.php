<?php
switch ($_SESSION['role']) {
  case 'villain':
    header('Location: villaindb.com/villain/index.php');
    exit;
    break;
  case 'boss':
    header('Location: bossdb.com/villain/index.php');
    exit;
    break;
  case 'minion':
    header('Location: miniondb.com/villain/index.php');
    exit;
    break;
}

}



?>
