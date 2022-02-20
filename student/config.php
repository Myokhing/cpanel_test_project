<?php
$server_name = 'localhost';
$username = 'root';
$password = '';
$dbname = 'school';
$conn = mysqli_connect($server_name, $username, $password, $dbname);

$students = "SELECT * FROM students";

$result = mysqli_query($conn, $students);
?>


<table border="1">
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
 <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['join_date']; ?></td>
  <td><?php echo $row['bio']; ?></td>
  <td><?php echo $row['room_id']; ?></td>
  <td><?php echo $row['created_at']; ?></td>
 </tr>

 <?php 
}
?>

 </table>
