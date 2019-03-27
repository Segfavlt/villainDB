<?php
include "../resources/php/session.php";
?>

<html lang="en">
<head>
  <title>Villain Panel - Add Base</title>
</head>

<body class="bg-secondary text-light">
<?php require_once '../resources/php/base_edit.php'; ?>
<?php include "../resources/php/nav.php" ?>
<br>
<div class="container">
<form action="../resources/php/base_edit.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Region</label>
    <select name= "selected_region" class="form-control" id="selected_region">
      <?php include "../resources/php/regions_display.php"; ?>
    </select>
    <button type="submit" name="add" class="btn btn-primary mb-2">Add</button>
  </div>
</form>
</div>
</body>
</html>