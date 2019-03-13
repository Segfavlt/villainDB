<?php
  session_start();
  if ($_SESSION['authenticated'] == 1) {
    header('Location: http://villaindb.com/success.php');
  }
?>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, \
    shrink-to-fit=no">

    <!-- Bootstrap (check for updates) -->
    <link href="resources/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <title>villainDB</title>

</head>

<body>
<div class="container">
    <div class="row m-4">

        <div class="col">
        </div>

        <div class="col-4">
            <div class=" p-3 shadow rounded">
                <div class="pt-3">
                    <img
                        src="resources/svg/villainDB.svg" alt="villainDB" height="46px"
                        width="187px"
                    />
                </div>

                <form class="mt-5" action="resources/php/login_request.php"
                  method="post">
                    <div class="form-group">
                        <input type="text"
                            class="form-control form-control-sm"
                            placeholder="Username"  name="user">
                    </div>

                    <div class="form-group">
                        <input type="password"
                            class="form-control form-control-sm"
                            placeholder="Password"  name="pwd">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input"
                        id="rememberCheckBox">
                        <label class="form-check-label text-dark"
                          for="rememberCheckBox">Remember me?</label>
                    </div>
<?php

  if (isset($_SESSION['loginerror'])) {
    echo "<span> Failed to username or password</span>";
  }
?>

                    <div class="mt-5">
                        <button class="btn btn-sm btn-danger col"
                        type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col">
        </div>

    </div>
</div>
</body>

</html>
