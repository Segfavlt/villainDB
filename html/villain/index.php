<html lang="en">
<head>
  <title>Villain Panel</title>
</head>
<?php include "../resources/php/nav.php" ?>

<?php
if ($_SESSION['access'] != 'villain') {
  header('Location: /success.php');
}
?>

<body class="bg-secondary text-light">

Hello Master
</body>
</html>
