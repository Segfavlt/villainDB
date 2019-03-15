<?php
include_once '../resources/php/session.php';

if ($_SESSION['role'] != 'villain') {
  header('Location: /success.php');
}
?>

<html lang="en">
<head>
  <title>Villain Panel</title>
</head>

<body class="bg-secondary text-light">
<?php include "../resources/php/nav.php" ?>
Hello Master
</body>
</html>
