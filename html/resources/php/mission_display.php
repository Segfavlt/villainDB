<?php
include 'connect.php';

$ident = $_SESSION['user'];


$target_var=", mission.target";
$description_var=", mission_description.description";
$target_col='<th scope="col">Target</th>';
$description_col='';

switch ($_SESSION['access']) {
  case 'villain':
    $mquery = "select mission.name, boss.name as bname $target_var $description_var from mission left join mission_description on mission.target=mission_description.target left join boss on mission.boss=boss.id order by mission.name";
    break;
  case 'boss':
    $mquery = "select mission.name, boss.name as bname $target_var $description_var from mission left join mission_description on mission.target=mission_description.target left join boss on mission.boss=boss.id where boss.id='$ident' order by mission.name";
    break;
}

$conn = new mysqli($db_host, $db_user, $db_pass, $db);

try {
  $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

  $result = $conn->query($mquery);
  $conn->commit();
  $conn->close();

?>



<?php
  while ($row = $result->fetch_assoc()):
?>

<tr>
  <th scope="row"> <?php echo ucfirst($row['name']); ?> </th>
  <td> <?php echo $row['bname']; ?> </td>
  <td> <?php echo ucfirst($row['target']); ?> </td>
  <td> <?php echo ucfirst($row['description']); ?> </td>
</tr>

<?php endwhile;
} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>