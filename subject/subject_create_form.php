<?php
include("../vendor/autoload.php");
include("../layout/head.php");
include("../layout/nav.php"); 
include("../layout/header.php");
?>
<?php
use Libs\Database\MySQL;
use Libs\Database\Course;
$table = new Course(new MySQL());
$courses = $table->CourseGetAll();
?>
<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header">
     <h1>Subject Create</h1>
    </div>
    <div class="card-body">
     <form action="../_actions/subject_create.php" method="POST">
      <label for="name">Subject Name</label>
      <div class="input-group">
       <input type="text" name="subject_name" id="" class="form-control">
      </div>
       <label for="name">Course Name</label>
      <div class="input-group">
       <select name="course_id" id="" class="form-select form-select-lg mb-3">
        <option value="">Select Course</option>
        <?php foreach($courses as $course) : ?>
        <option value="<?= $course->id ?>"><?= $course->course_name ?></option>
        <?php endforeach ?>
       </select>
      </div>

      
      <div class="input-group mt-5">
       <button type="submit" class="btn btn-primary">Subject Course</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
<?php include("../layout/footer.php"); ?>