<?php
include_once ("session.php");
include ("connect.php");

$mysql = new mysqli($db_host, $db_user, $db_pass, $db);
if($mysql ->connect_errno) {
    echo 'Could not connect: ' . $mysql->connect_error;
}

$query = "select * from base order by id";
$result = $mysql -> query($query);

while ($row = $result->fetch_assoc()):
?>

<tr>
  <th scope="row"> <?php echo $row['id']; ?> </th>
  <td> <?php echo $row['region']; ?> </td>
  <td class="text-right">
    <a href="../resources/php/base_edit.php?delete=<?php echo $row['id']; ?> "
    class="btn btn-danger">Delete</a>
  </td>
</tr>


<?php endwhile; ?>