<?php
include 'connect.php';

$user = trim($_POST['user']);
$pass = trim($_POST['pwd']);

$conn = new mysqli($db_host, $db_user, $db_pass, $db);
$query = "select * from users where id='$user'";

$result = $conn -> query($query);


if ($result->num_rows > 0) {
    echo "results";
    while ($row = $result->fetch_assoc()) {
        if (password_verify($pass, $row['passwd'])) {
            if ($row['logged_in' == false]) {
                $conn ->query("insert into users logged_in=true where id='$user'");
                session_start();
                $_SESSION['user'] = $user;
            } else {
                echo "<br> $user already logged in";
            }
        } else {
          echo "<br> Invalid user or password <br>";
        }
    }
} else {
    echo "<br> Invalid user or password <br>";
}
$conn->close();
?>
