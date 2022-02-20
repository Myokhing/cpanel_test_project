<?php
include("vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\database\Student;


$table = new Student(new MySQL());
$students = $table->getAll();


?>

<table>
 <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Join_Date</th>
  <th>Bio</th>
  <th>Room_id</th>
  <th>Created_at</th>
 </tr>
 <tbody>
  <?php foreach($students as $student) : ?>
  <tr>
    <td><?= $student ->id ?></td>
    <td><?= $student ->name ?></td>
    <td><?= $student ->join_date ?></td>
    <td><?= $student ->bio ?></td>
    <td><?= $student ->room_id ?></td>
    <td><?= $student ->created_at ?></td>
  </tr>
  <?php endforeach ?>
 </tbody>
</table>