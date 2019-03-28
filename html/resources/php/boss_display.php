<?php
include ("connect.php");
$user = $_SESSION['user'];
$conn = new mysqli($db_host, $db_user, $db_pass, $db);
if($conn ->connect_errno) {
    echo 'Could not connect: ' . $conn->connect_error;
}
switch($_SESSION['access']) {
  case 'villain':
    $query = "select id, name, base, effectiveness from boss where id <> '$user'";
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
  <td> <?php echo ucwords($row['name']); ?> </td>
  <td> <?php echo $row['base']; ?> </td>
  <td> <?php echo $row['effectiveness']; ?> </td>
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
