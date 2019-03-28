<?php
include "resources/php/session.php";
include"resources/php/profile_info.php";


switch ($_SESSION['access']){
  case 'minion':
    $rating = $basic_info['grade'];
    $metric = 'Grade';
    $extra = $class;
    $extra_label = "Class";
    break;
  case 'boss':
  case 'villain':
    $rating = $basic_info['effectiveness'];
    $metric = 'Effectiveness';
    $extra = $basic_info['name'];
    $extra_label = "Name";
    break;
}

switch ($class) {
  case 'Spy':
    $skill = $adv_info['subterfuge'];
    $skill_label = 'Subterfuge Level';
    $tool = $adv_info['gadget'];
    $tool_label = 'Gadget';
    break;
  case 'Tech':
    $skill = $adv_info['repair_rating'];
    $skill_label = 'Repair Rating';
    $tool = $adv_info['tool'];
    $tool_label = 'Tool';
    break;
  case 'Muscle':
    $skill = $adv_info['att_power'];
    $skill_label = 'Strength';
    $tool = $adv_info['weapon'];
    $tool_label = 'Weapon';
    break;
}

?>

<html>

<head>
  <title>Profile</title>
  <style>
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link{
      background-color: #dc3545 !important;
      border-color: #dc3545 !important;
      color: #fff !important;
      }
    .nav-link {
      color: #999 !important;
    }
  </style>
</head>

<?php include "resources/php/nav.php";?>
<body class="bg-secondary text-light">
  <div class="container">
      <div class="row mt-5">

        <div class="col"></div>

        <div class="container">
        <!-- Nav tab/pill -->
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item bg-dark">
              <a class="nav-link active" id="pills-basic-tab" data-toggle="pill" href="#pills-basic" role="tab" aria-controls="pills-basic" aria-selected="true">Basic Profile<a>
            </li>
<?php if($_SESSION['access'] == 'minion' && $class != 'Minion') {
  echo '<li class="nav-item bg-dark">';
  echo '<a class="nav-link" id="pills-advanced-tab" data-toggle="pill" href="#pills-advanced" role="tab" aria-controls="pills-advanced" aria-selected="false">Advanced Class<a>';
  echo '</li>';
} ?>
        </ul>

        <!-- Pill panes -->
        <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
                <div class="panel-body ">
                    <div class="row">

                        <div class="bg-dark col-4 rounded">

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
                                <span class="input-group-text" id="basic-addon2">
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

                            <form action="resources/php/update_pass.php" method="post">
                              <div class="form-group">
                                <label for="pwd1">Password</label>
                                <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="pwd2">Verify Password</label>
                                <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Password">
                              </div>
                              <?php
                                if ($_SESSION['passdiff']) {
                                  echo "<span class='text-warning'>Passwords do not match</span>";
                                }
                              ?>
                              <button class="btn btn-sm btn-danger col"
                                type="submit">
                                Login
                              </button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-advanced" role="tabpanel" aria-labelledby="pills-advanced-tab">
                <div class="panel-body">
                    <div class="row">

                        <div class="bg-dark col-4 rounded">

                            <div class="input-group input-group-sm mt-3 mb-3">
                                <div class="input-group-prepend">
                                    <span class=" input-group-text" id="basic-addon5">
                                        <?php echo $skill_label;?>
                                    </span>
                                </div>
                                <input type="text" readonly="true" class="form-control" value="<?php echo $skill;?>" aria-label="grade" aria-describedby="basic-addon5">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class=" input-group-text" id="basic-addon6">
                                        <?php echo $tool_label;?>
                                    </span>
                                </div>
                                <input type="text" readonly="true" class="form-control" value="<?php echo $tool;?>" aria-label="base" aria-describedby="basic-addon6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <div class="bg-dark col-4 rounded">
          </div>
        </div>
    <div class='col'></div>
  </div>
</body>
</html>
