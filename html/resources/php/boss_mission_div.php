<?php
include ("connect.php");

$conn = new mysqli($db_host, $db_user, $db_pass, $db);
if($conn ->connect_errno) {
  echo 'Could not connect: ' . $conn->connect_error;
}
$query = "select name, id from boss b where not exists (select m.name, m.boss from mission m where not exists (select boss from mission m2 where b.id=m2.boss and m.name=m2.name))";
try{
    $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

    $result = $conn->query($query);
    $conn->commit();
    $conn->close();
    $ansString = "";
    while ($row = $result->fetch_assoc()) {
      $ansString .= "<tr>";
      $ansString .= "<td>".$row['id']."</td>";
      $ansString .= "<td>".ucwords($row['name'])."</td>";
      $ansString .= "</tr>";

    }
    echo $ansString;

} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
?>
