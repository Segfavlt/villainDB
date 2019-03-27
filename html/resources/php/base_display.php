<?php
include_once ("session.php");
include ("connect.php");

$mysql = new mysqli($db_host, $db_user, $db_pass, $db);
if($mysql ->connect_errno) {
    echo 'Could not connect: ' . $mysql->connect_error;
}

$order = "order by id";
if (isset($_GET['order_by'])){
  $order = "order by " . $_GET['order_by'];
}

$query = "select * from base ". $order;
$result = $mysql -> query($query);

while ($row = $result->fetch_assoc()):
?>

<tr>
  <th scope="row"><span class="ml-2"><?php echo $row['id']; ?> </th>
  <td> <?php echo $row['region']; ?> </td>
  <td class="text-right">
    <a href="../resources/php/base_edit.php?delete=<?php echo $row['id']; ?> "
    class="btn btn-danger mr-2"><i class="fas fa-trash"></i></a>
  </td>
</tr>

<?php endwhile; ?>