<?php
include "../resources/php/session.php";
?>

<html lang="en">
<head>
  <title>Boss Dashboard</title>


</head>

<body class="bg-secondary text-light">
<?php include "../resources/php/nav.php" ?>
<br>
<div class="container-fluid">

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
<div class="row">
<div class="col-3"></div>
<div class="col-6">
<table class="table table-dark">
  <thead>
    <tr>
      <th colspan="3" scope="col" class="text-right"><h3>Bosses</h3></th>
      <th colspan="2" scope="col" class="text-right">
      <input id="avgbtn" type="button" data-toggle="modal" data-target="#avgModal" class="btn btn-info" action="submit" value="Average Effectiveness"/>
    </th>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Base</th>
      <th scope="col">Effectiveness</th>
      <th colspan="2" scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php include "../resources/php/boss_display.php"; ?>
  </tbody>
</table>
<div class="modal fade" tabindex="-1" role="dialog" id="avgModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header bg-dark">
        <h5 class="modal-title">Average Boss Effectiveness</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><i class="fa fa-times" style="color:white" aria-hidden="true"></i>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-dark">
        <thead>
        <tr><th>Average Effectiveness</th></tr>
        <tbody id="ajaxDiv">
        </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>

</div>
</div>


</div>
<div class="col-3"></div>
</div>
</div>
</div>
</div>
<script>
      $("#avgbtn").click(function () {
              $.ajax({
                  type: "post",
                  url: "../resources/php/avg_boss_rating.php",
                  success: function (data) {
                    $("#ajaxDiv").html(data);
                  }
              });
      });
  </script>
</body>
</html>
