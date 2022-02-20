<?php
include("head.php");
$sever_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "school";

$connection = mysqli_connect($sever_name, $user_name, $password, $db_name);

if ($connection) {
    echo "Connection Successful";
 
}else{
    echo "Connection Error";
}

$students = "SELECT * FROM students";

$result = mysqli_query($connection, $students);

?>
<table class="table table-striped table-primary">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Join_Date</th>
        <th>Bio</th>
        <th>Room_id</th>
        <th>created_at</th>
    </tr>
<?php
while($row = mysqli_fetch_array($result)){
?>
<tbody>
 <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['join_date']; ?></td>
  <td><?php echo $row['bio']; ?></td>
  <td><?php echo $row['room_id']; ?></td>
  <td><?php echo $row['created_at']; ?></td>
 </tr>
</tbody>

<?php } ?>
</table>

