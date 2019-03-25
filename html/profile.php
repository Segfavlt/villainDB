<?php
include "./resources/php/session.php";
#include './resources/php/profile_info.php'
?>



<html>

<head>
  <title>Profile</title>
</head>

<?php include "./resources/php/nav.php"?>
<body class="bg-secondary text-light">
<div class="container">

  <div class="row m-3">

  <div class="row m-3 bg-dark">


  <div class="input-group col">
    <div class="input-group-prepend">
      <span class="mt-5 input-group-text" id="basic-addon1">Identification #</span>
    </div>
    <input type="text" readonly="true" class="mt-5 form-control" value="<?php echo $_SESSION['user'];?>" aria-label="Username" aria-describedby="basic-addon1">
    <div class="input-group-prepend">
      <span class="mt-5 input-group-text" id="basic-addon1">Grade</span>
    </div>
  </div>

</div>

</div>


</body>
</html>


