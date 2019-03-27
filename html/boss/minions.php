<?php
include "../resources/php/session.php";
?>

<html lang="en">
<head>
  <title>Villain Panel - Bases</title>
</head>

<body class="bg-secondary text-light">
<?php include "../resources/php/nav.php" ?>
<br>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th colspan="5" scope="col" class="text-center"><h3>Minions</h3></th>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Grade</th>
      <th scope="col">Base</th>
      <th scope="col">Class</th>
      <th colspan="2" scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php include "../resources/php/minion_display.php"; ?>
  </tbody>
</table>
</div>
</body>
</html>