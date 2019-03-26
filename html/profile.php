<?php
include "resources/php/session.php";
include"resources/php/profile_info.php";


if ($_SESSION['access'] == 'minion') {
  $rating = $basic_info['grade'];
  $metric = 'Grade';
  $extra = $class;
  $extra_label = "Class";
} else if ($_SESSION['access'] == 'boss') {
  $rating = $basic_info['effectiveness'];
  $metric = 'Effectiveness';
  $extra = $basic_info['name'];
  $extra_label = "Name";
}
?>

<html>

<head>
  <title>Profile</title>
</head>

<?php include "resources/php/nav.php";?>
<body class="bg-secondary text-light">
  <div class="container">
      <div class="row mt-5">

        <div class="col"></div>

        <div class="col-4 bg-dark  rounded">

          <div class="input-group input-group-sm mb-3 mt-3">
            <div class="input-group-prepend">
              <span class=" input-group-text" id="basic-addon1">
                Identification #
              </span>
            </div>
              <input type="text" readonly="true" class="form-control" value="<?php echo $_SESSION['user'];?>" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class=" input-group-text" id="basic-addon2">
                <?php echo $extra_label;?>
              </span>
            </div>
              <input type="text" readonly="true" class="form-control" value="<?php echo $extra;?>" aria-label="Extra Info" aria-describedby="basic-addon2">
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class=" input-group-text" id="basic-addon3">
                <?php echo $metric;?>
              </span>
            </div>
              <input type="text" readonly="true" class="form-control" value="<?php echo $rating;?>" aria-label="grade" aria-describedby="basic-addon3">
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class=" input-group-text" id="basic-addon4">
                Base ID
              </span>
            </div>
              <input type="text" readonly="true" class="form-control" value="<?php echo $basic_info['base'];?>" aria-label="base" aria-describedby="basic-addon4">
          </div>
        </div>



      <div class="col"></div>
    </div>

  </div>

</body>
</html>


