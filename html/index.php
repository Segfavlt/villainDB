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
<div class="modal-dialog">
	<div class="modal-content bg-dark">
		<div class="modal-heading">
            <img
                src="resources/svg/villainDB.svg" alt="villainDB" class="img-fluid ml-4 mt-5" alt="Responsive image"
            />
		</div>
		<hr />
		<div class="modal-body">
			<form action="resources/php/login_request.php" role="form" method="post">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control" placeholder="Username" name="user"/>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" placeholder="Password" name="pwd"/>
					</div>
				</div>
                    <?php
                        if (isset($_SESSION['loginerror'])) {
                        echo "<span class='text-warning'> Failed to authenticate username or password</span>";
                    }
                    ?>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-success btn-lg mt-5">Login</button>
				</div>

			</form>
		</div>
	</div>
</div>
</body>

</html>
