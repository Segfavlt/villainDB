<?php
include_once ("session.php");
include ("connect.php");

$mysql = new mysqli($db_host, $db_user, $db_pass, $db);
if($mysql ->connect_errno) {
    echo 'Could not connect: ' . $mysql->connect_error;
}

$query = "select * from region";
$result = $mysql -> query($query);

while ($row = $result->fetch_assoc()):
?>
<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
<?php endwhile; ?>