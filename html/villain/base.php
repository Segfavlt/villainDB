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

<?php if (!isset($ordered_by)){
  $ordered_by="id";
  }
?>
<table class="table table-dark">
  <thead>
    <tr>
      <th colspan="3" scope="col" class="text-center"><h3>Bases</h3></th>
    </tr>
    <tr>
      <th colspan="3" scope="col">
      <div class="form-row">
        <label class="ml-3">
            Filter:
        </label>
        <div class="form-check ml-3">
          <input class="form-check-input" type="checkbox" id="gridCheck1">
          <label class="form-check-label" for="gridCheck1">
            North America
          </label>
        </div>
        <div class="form-check ml-3">
          <input class="form-check-input" type="checkbox" id="gridCheck2">
          <label class="form-check-label" for="gridCheck2">
            South America
          </label>
        </div>
        <div class="form-check ml-3">
          <input class="form-check-input" type="checkbox" id="gridCheck3">
          <label class="form-check-label" for="gridCheck3">
            Africa
          </label>
        </div>
        <div class="form-check ml-3">
          <input class="form-check-input" type="checkbox" id="gridCheck4">
          <label class="form-check-label" for="gridCheck4">
            Europe
          </label>
        </div>
        <div class="form-check ml-3">
          <input class="form-check-input" type="checkbox" id="gridCheck5">
          <label class="form-check-label" for="gridCheck5">
            Asia
          </label>
        </div>
      </div>
      </th>
    </tr>
    <tr>
      <th scope="col"><a class="ml-2" href="base.php?order_by=id">#</a></th>
      <th scope="col"><a href="base.php?order_by=region">Region</a></th>
      <th colspan="2" scope="col" class="text-right">
      <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-plus"></i>
</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php include "../resources/php/base_display.php" ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
    <form action="../resources/php/base_edit.php" method="POST">
      <div class="modal-header bg-dark">
        <h5 class="modal-title" id="exampleModalLabel">Add a new base</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times" style="color:white" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
      <?php require_once '../resources/php/base_edit.php'; ?>
      <br>
      <div class="container">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Region</label>
          <select name= "selected_region" class="form-control" id="selected_region">
            <?php include "../resources/php/regions_display.php"; ?>
          </select>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add" class="btn btn-primary">Add</button>

      </div>
    </form>
    </div>
  </div>
</div>
</body>
</html>