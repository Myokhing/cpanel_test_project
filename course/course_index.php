<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\Database\Course;
$table = new Course(new MySQL());
$courses = $table->CourseGetAll();
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h2>Course Name <span><a href="course_create_form.php" class="btn btn-primary">Course Create</a></span></h2></div>
    <div class="card-body">
     <table class="table">
 <tr>
  <th>ID</th>
  <th>Course Name</th>
  <th>Created_at</th>
 </tr>
 <tbody>
  <?php foreach($courses as $course) : ?>
  <tr>
    <td><?= $course ->id ?></td>
    <td><?= $course ->course_name ?></td>
    <td><?= $course ->created_at ?></td>
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