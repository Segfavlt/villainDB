<html lang="en">
<head>
  <title>Missions Dashboard</title>
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
      <th colspan="4" scope="col" class="text-center"><h3>Missions</h3></th>
      <th colspan="2" scope="col" class="text-right"><!---<form  action="../resources/php/avg_class_rating.php" method="post">-->
      <?php $buttonhtml = '<input id="avgbtn" type="button" data-toggle="modal" data-target="#expandModal" class="btn btn-info" action="submit" value="Expand"/>';
            if ($_SESSION['access']=="villain") {echo $buttonhtml;} ?>
    </th>
    </tr>
    <tr>
    <?php 
    $include_var="../resources/php/mission_display.php";
    // projection check // which columns should be shown
      if (isset($_GET['showvals'])) {
        switch ($_GET['showvals']) {
          case "both":
            $include_var = "../resources/php/mission_display_all.php";
            break;
          case "none":
            $include_var = "../resources/php/mission_display.php";
            break;
          case "target":
            $include_var = "../resources/php/mission_display_target.php";
            break;
          case "description":
            $include_var = "../resources/php/mission_display_description.php";
            break;
          default:
            return null;
            break;
          }
      }
      include $include_var;
      // endif // alert ends here
      ?>
    <?php  ?>
</table>
</div>

<div class="modal fade" id="expandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header bg-dark">
        <h5 class="modal-title" id="exampleModalLabel">Show more columns:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times" style="color:white" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <form action="../resources/php/checkbox-form.php" method="post">
      <div class="modal-body bg-secondary">
      <br>
      <div class="container">
          <div class="form-row">
            <div class="form-check form-check-inline">
              <input type="checkbox" name="checkedvals[]" value="target" id="target" class="form-check-input ml-2">
              <label class="form-check-label" for="target">Target</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" name="checkedvals[]" value="description" id="description" class="form-check-input ml-2">
              <label class="form-check-label" for="description">Description</label>
            </div>
          </div>
        
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="formSubmit" class="btn btn-primary" value="Submit">Show</button>
      </div>
    </form>
    </div>
  </div>
</div>

</body>
</html>
