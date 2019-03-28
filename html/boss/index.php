<html lang="en">
<head>
  <title>Boss Panel</title>
</head>

<body class="bg-secondary text-light">
<?php include "../resources/php/nav.php" ?>

<?php
if ($_SESSION['access'] != 'boss') {
  header('Location: /success.php');
} else {
  header('Location: /boss/minions.php');
}
?>
</body>
</html>
