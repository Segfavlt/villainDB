<?php
session_start();
include 'connect.php';
$user = trim($_POST['user']);
$pass = trim($_POST['pwd']);

$conn = new mysqli($db_host, $db_user, $db_pass, $db);

$log_in_request = "select * from users where id='$user'";
$get_role_query = "select roles.role from roles, user_role where roles.id = user_role.role and user_role.user = '$user'";

try {
  $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

  $auth_result = $conn -> query($log_in_request);
  $role_result = $conn -> query($get_role_query);
  $conn->commit();
  $conn->close();
  if ($auth_result->num_rows > 0 && $role_result->num_rows>0) {
    while ($row = $auth_result->fetch_assoc()) {
      if (password_verify($pass, $row['passwd'])) {

        session_start();
        while ($row2 = $role_result->fetch_assoc()) {
            $role = $row2['role'];
            $_SESSION['access'] = $role;
          }

        $_SESSION['user'] = $user;
        $_SESSION['authenticated'] = true;
        $_SESSION['loginerror'] = 0;

        header('Location: /success.php');
        exit;
      } else {
        $_SESSION['loginerror'] = 1;
        $_SESSION['authenticated'] = false;
        header('Location: /index.php');
        exit;
      }
    }
  } else {
    $_SESSION['loginerror'] = 1;
    $_SESSION['authenticated'] = false;
    header('Location: /index.php');
    exit;
  }
} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>
