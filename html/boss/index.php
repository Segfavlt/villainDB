<?php
include "../resources/php/session.php";

if ($_SESSION['access'] != 'boss') {
  header('Location: /success.php');
}
?>
<html lang="en">
<head>
  <title>Boss Panel</title>
</head>

<body class="bg-secondary text-light">
<?php include "../resources/php/nav.php" ?>
Hello <?php echo $_SESSION['access']; echo ' '.$_SESSION['user'] ?>
</body>
</html>
