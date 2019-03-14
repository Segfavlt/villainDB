<?php

session_start();
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
  header('Location: /success.php');
  exit;
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap (check for updates) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>villainDB</title>
</head>

<body class="bg-secondary text-light">
<div class="container">
    <div class="row m-4">

        <div class="col">
        </div>

        <div class="col-4 bg-dark">
            <div class="p-3 shadow rounded">
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

<?php

  if (isset($_SESSION['loginerror'])) {
    echo "<span class='text-danger'> Failed to authenticate username or password</span>";
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
