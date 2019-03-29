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
<table class="table bg-secondary table-borderless mb-0">
  <thead>
    <tr class="bg-secondary text-light">
      <th colspan="2" scope="col" class="text-center">
        <?php 
          $buttonhtml = '<input id="divbtn" type="button" data-toggle="modal" data-target="#divModal" class="btn btn-info float-left" action="submit" value="Bosses with all Types"/>';
          if ($_SESSION['access']=="villain") {
          echo $buttonhtml;
          } 
        ?>
        <?php 
          $buttonhtml = '<input id="avgbtn" type="button" data-toggle="modal" data-target="#expandModal" class="btn btn-info float-right" action="submit" value="Expand"/>';
          if ($_SESSION['access']=="villain") {
            echo $buttonhtml;
          } 
        ?>
      </th>
    </tr>
</table>
<table class="table table-dark">
  <thead>
<tr>
  <th colspan="2" scope="col" class="text-center">
    <h3>Missions</h3>
  </th>
</tr>
</tr>
      <th scope="col">Type</th>
      <th scope="col">Boss</th>
      <th scope="col">Target</th>
      <th scope="col">Description</th>
    </tr>
  </thead>

<?php
  while ($row = $result->fetch_assoc()):
?>

<tr>
  <td scope="row"> <?php echo ucfirst($row['name']); ?> </td>
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

</tbody>