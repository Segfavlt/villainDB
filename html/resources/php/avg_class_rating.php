<?php
session_start();
include ("connect.php");

$user = $_SESSION['user'];
$conn = new mysqli($db_host, $db_user, $db_pass, $db);
if($conn ->connect_errno) {
  echo 'Could not connect: ' . $conn->connect_error;
}
$query = "select minion.class, avg(result.ability_rating) as average_ability from minion, (select id, ability_rating from spy union select id, ability_rating from tech union select id, ability_rating from muscle) as result where minion.id=result.id group by minion.class order by class ASC";
$avg_perf = null;
try{
    $conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

    $avg_perf = $conn->query($query);
    $conn->commit();
    $conn->close();
    $ansString;
    while ($row = $avg_perf->fetch_assoc()) {
      $ansString .= "<tr>";
      $ansString .= "<td>".$row['class']."</td>";
      $ansString .= "<td>".$row['average_ability']."</td>";
      $ansString .= "</tr>";

    }
    echo $ansString;

} catch (exception $e) {
  $conn->rollback();
  $conn->close();
}
return $avg_perf;
?>