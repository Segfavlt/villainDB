<?php
include "../resources/php/session.php";
?>

<html lang="en">
<head>
  <title>Minions Dashboard</title>


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
<div class="col-8">
<table class="table table-dark">
  <thead>
    <tr>
      <th colspan="3" scope="col" class="text-right"><h3>Minions</h3></th>
      <th colspan="2" scope="col" class="text-right"><!---<form  action="../resources/php/avg_class_rating.php" method="post">-->
      <?php $buttonhtml = '<input id="avgbtn" type="button" data-toggle="modal" data-target="#avgModal" class="btn btn-info" action="submit" value="Class Average"/>';
            if ($_SESSION['access']=="villain") {echo $buttonhtml;} ?>
    </th>
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
<div class="modal fade" tabindex="-1" role="dialog" id="avgModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header bg-dark">
        <h5 class="modal-title">Average Ability per Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><i class="fa fa-times" style="color:white" aria-hidden="true"></i>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-dark">
        <thead>
        <tr><th>Class</th><th>Average</th></tr>
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


<div class="modal fade" tabindex="-1" role="dialog" id="filterModal" aria-labelledby="filterModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header bg-dark">
        <h5 class="modal-title">Filtered minions by grade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><i class="fa fa-times" style="color:white" aria-hidden="true"></i>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-dark">
        <thead>
        <tr><th>ID</th><th></th></tr>
        <tbody id="filterDiv">
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
<div class="col-3">
  <div class="bg-dark">
    <div class="row">
    <div class="col-2">

</div><div class="col mt-3">

      <div class="form-group">
        <h5>Filter minion by grade</h5>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="gradeSelectButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Grade
          </button>
          <div class="dropdown-menu bg-secondary text-light" aria-labelledby="dropdownMenuButton">
           <button class="dropdown-item bg-secondary text-light" type="button"><span>S</span></button>
           <button class="dropdown-item bg-secondary text-light" type="button"><span>A</span></button>
           <button class="dropdown-item bg-secondary text-light" type="button"><span>B</span></button>
           <button class="dropdown-item bg-secondary text-light" type="button"><span>C</span></button>
           <button class="dropdown-item bg-secondary text-light" type="button"><span>D</span></button>
           <div class="dropdown-divider"></div>
           <button class="dropdown-item bg-secondary text-light" type="button"><span>Select Grade</span></button>
          </div>
          <button type="submit" class="btn btn-info" id="filter">Filter</button>
        </div>
      </div>
    </div>
</div></div>
</div>
</div>
<script>
      $("#avgbtn").click(function () {
              $.ajax({
                  type: "post",
                  url: "../resources/php/avg_class_rating.php",
                  success: function (data) {
                    $("#ajaxDiv").html(data);
                  }
              });
      });

      $("#filter").click(function () {
        var filter = $("#gradeSelectButton").html();
          if (['S', 'A', 'B', 'C', 'D'].includes(filter)) {
            $.post("../resources/php/filter_grade.php",
                {grade: filter},
                function(response){
                  $("#filterDiv").html(response);
                  $("#filterModal").modal('show');
                }
            );
          } else {
            $("#filter-warning").alert('close');
            console.log("bad");
          }
      });

$('.dropdown-item').on('click', function() {
    $('#gradeSelectButton').html($(this).find('span').html());
});
  </script>
</body>
</html>
