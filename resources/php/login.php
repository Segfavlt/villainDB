<?php
include 'connect.php';

$user = trim($_POST['user']);
$pass = trim($_POST['pwd']);

$conn = new mysqli($db_host, $db_user, $db_pass, $db);
$log_in_request = "select * from users where id='$user'";
$logged_in_set = "insert into users logged_in=true where id='$user'";
$get_role_query = "select roles.role from roles, user_role where roles.id = user_role.role and user_role.user = '$user'";

$auth_result = $conn -> query($log_in_request);


if ($auth_result->num_rows > 0) {
  while ($row = $auth_result->fetch_assoc()) {
    if (password_verify($pass, $row['passwd'])) {
      echo $row['logged_in'];
      if (!$row['logged_in']) {
        $conn -> query($logged_in_set);

        session_start();
        $role_result = $conn -> query($get_role_query);
        if ($role_result->num_rows > 0) {
          while ($row2 = $role_result->fetch_assoc()) {
            $role = $row2['role'];
            $_SESSION['role'] = $role;
          }
        }

        $_SESSION['user'] = $user;
        echo $_SESSION['user']."<br>";
        echo $_SESSION['role']."<br>";
      } else {
          echo "<br> $user already logged in<br>";
      }
    } else {
      echo "<br> Failed ot verify user or password<br>";
    }
  }
} else {
    echo "<br> Invalid user or password <br>";
}
session_destroy();
$conn->close();
?>
