<?php
include "../resources/php/session.php";
?>

<html lang="en">
<head>
  <title>Villain Panel - Bases</title>
</head>

<body class="bg-secondary text-light">
<?php include "../resources/php/nav.php" ?>

<h3>Bases</h3>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Region</th>
      <th colspan="2" scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php include "../resources/php/base_display.php"; ?>
  </tbody>
</table>
</div>
</body>
</html>