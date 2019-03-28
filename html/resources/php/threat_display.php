<?php
session_start();
include 'connect.php';

$ident = $_SESSION['user'];

switch ($_SESSION['access']) {
  case 'villain':
    $mquery = "select * from threat order by id";
    break;
  case 'boss':
    $mquery = "select * from threat left join base on threat.region=base.region where base.boss='$ident'";
    break;
}

$conn = new mysqli($db_host, $db_user, $db_pass, $db);

try {
  $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

  $result = $conn->query($mquery);
  $conn->commit();
  $conn->close();

while ($row = $result->fetch_assoc()):

?>

<tr>
  <th scope="row"> <?php echo $row['id']; ?> </th>
  <td> <?php echo $row['risk']; ?> </td>
  <td> <?php echo ucfirst($row['name']); ?> </td>
  <td> <?php echo $row['region']; ?> </td>
</tr>


<?php endwhile;
} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>
