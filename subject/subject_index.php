<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\Subject;


$table = new Subject(new MySQL());
$subjects = $table->getAll();


?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h2>Subject Name <span><a href="subject_create_form.php" class="btn btn-primary">Subject Create</a></span></h2></div>
    <div class="card-header"><h2>Total Subjects :<span class="badge bg-danger text-white"> <?= count($subjects) ?></span></h2></div>
    <div class="card-body">
     <table class="table">
 <tr>
  <th>ID</th>
  <th>Subject Name</th>
  <th>Course ID</th>
  <th>Created_at</th>
 </tr>
 <tbody>
  <?php foreach($subjects as $subject) : ?>
  <tr>
    <td><?= $subject ->id ?></td>
    <td><?= $subject ->subject_name ?></td>
    <td><?= $subject ->course_name ?></td>
    <td><?= $subject ->created_at ?></td>
  </tr>
  <?php endforeach ?>
 </tbody>
</table>
    </div>
   </div>
  </div>
 </div>
</div>

<?php include("../layout/footer.php"); ?>