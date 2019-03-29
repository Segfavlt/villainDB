<?php
include ("connect.php");
$user = $_SESSION['user'];
$conn = new mysqli($db_host, $db_user, $db_pass, $db);
if($conn ->connect_errno) {
    echo 'Could not connect: ' . $conn->connect_error;
}
switch($_SESSION['access']) {
  case 'villain':
    $query = "select count(*) as count from minion;";
    break;
  case 'boss':
    $query = "select count(*) as count from minion where minion.base in (select base from boss where id='$user')";
    break;
}

try {
  $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

  $result = $conn->query($query);
  $conn->commit();
  $conn->close();

while ($row = $result->fetch_assoc()):
?>

  <th colspan="1"> Total Minions: <?php echo $row['count']; ?> </th>


<?php endwhile;
} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>
