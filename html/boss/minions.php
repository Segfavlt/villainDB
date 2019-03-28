<?php
include "../resources/php/session.php";
?>

<html lang="en">
<head>
  <title>Boss Panel - Minions</title>
</head>

<body class="bg-secondary text-light">
<?php include "../resources/php/nav.php" ?>
<br>
<div class="container">

<?php // alert starts here
if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show">
<?php echo $_SESSION['message']; 
      unset($_SESSION['message']);
?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif // alert ends here
?>

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