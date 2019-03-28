<?php
session_start();
include ("connect.php");


$grade = $_POST['grade'];
var_dump($_POST);
$user = $_SESSION['user'];
$conn = new mysqli($db_host, $db_user, $db_pass, $db);
if($conn ->connect_errno) {
  echo 'Could not connect: ' . $conn->connect_error;
}
switch ($_SESSION['access']) {
  case 'villain':
    $query = "select id from minion where grade='$grade'";
    break;
  case 'boss':
    $query = "select minion.id from minion where grade='$grade' and minion.base in (select base from boss where id='$user') order by id";

}
echo $query;
try{
    $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

    $result = $conn->query($query);
    $conn->commit();
    $conn->close();
    $ansString = "";
    while ($row = $result ->fetch_assoc()) {
      $ansString .= "<tr>";
      $ansString .= "<td>".$row['id']."</td>";
      $ansString .= "</tr>";

    }
    if ($ansString != '') {
      echo $ansString;
    }
    else {
      $_SESSION['msg_type'] = "warning";
      $_SESSION['message'] = "Not a valid Grade";
    }

} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>
