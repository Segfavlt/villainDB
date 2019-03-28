<?php
include ("connect.php");
$user = $_SESSION['user'];
$conn = new mysqli($db_host, $db_user, $db_pass, $db);
if($conn ->connect_errno) {
    echo 'Could not connect: ' . $mysql->connect_error;
}
switch($_SESSION['access']) {
  case 'villain':
    $query = "select minion.id, minion.grade, minion.base, advanced.class from minion left join advanced on minion.class=advanced.rank order by id";
    $avg_perf_query = "select minion.class, avg(result.ability_rating) from minion, (select id, ability_rating from spy union select id, ability_rating from tech union select id, ability_rating from muscle) as result where minion.id=result.id group by minion.class order by class ASC";
    break;
  case 'boss':
    $query = "select minion.id, minion.grade, minion.base, advanced.class from minion left join advanced on minion.class=advanced.rank where minion.base in (select base from boss where id='$user') order by id";
    break;
}

try {
  $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

  $result = $conn->query($query);
  $conn->commit();
  $conn->close();

while ($row = $result->fetch_assoc()):
?>

<tr>
  <th scope="row"> <?php echo $row['id']; ?> </th>
  <td> <?php echo $row['grade']; ?> </td>
  <td> <?php echo $row['base']; ?> </td>
  <td> <?php echo ucfirst($row['class']); ?> </td>
  <td class="text-right">
    <a href="../resources/php/minion_edit.php?delete=<?php echo $row['id']; ?> "
    class="btn btn-danger"><i class="fas fa-trash"></i></a>
  </td>
</tr>


<?php endwhile; 
} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>