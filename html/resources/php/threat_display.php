<?php
include 'connect.php';

$ident = $_SESSION['user'];

switch ($_SESSION['access']) {
  case 'villain':
    $mquery = "select * from threat order by id";
    break;
  case 'boss':
    $mquery = "select threat.name, threat.id, threat.risk, threat.region from threat left join base on threat.region=base.region left join boss on boss.base=base.id where boss.id='$ident'";

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
  <th scope="row"> <?php echo $row['name']; ?> </th>
  <td> <?php echo $row['id']; ?> </td>
  <td> <?php echo ucfirst($row['risk']); ?> </td>
  <td> <?php echo $row['region']; ?> </td>
</tr>


<?php endwhile;
} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>
