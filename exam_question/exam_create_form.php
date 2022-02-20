<?php
include("../vendor/autoload.php");
include("../layout/head.php");
include("../layout/nav.php"); 
include("../layout/header.php");
?>
<?php

use Libs\Database\Chapter;
use Libs\Database\MySQL;
use Libs\Database\Course;
use Libs\Database\Subject;

$table = new Course(new MySQL());
$courses = $table->CourseGetAll();

$table = new Subject(new MySQL());
$subjects = $table->SubjectGetAll();

$table = new Chapter(new MySQL());
$chapters = $table->ChpaterGetAll();
?>
<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header mb-3">
     <h1>OnlineClasses Examination Create</h1>
    </div>
    <div class="card-body">
     <form action="../_actions/exam_question_create.php" method="POST">
      
      <label for="name">Course Name</label>
      <div class="input-group mb-3">
       <select name="course_id" id="" class="form-select form-select-lg mb-3">
        <option value="">Select Course</option>
        <?php foreach($courses as $course) : ?>
        <option value="<?= $course->id ?>"><?= $course->course_name ?></option>
        <?php endforeach ?>
       </select>
      </div>

       <label for="name">Subject Name</label>
      <div class="input-group mb-3">
       <select name="subject_id" id="" class="form-select form-select-lg mb-3">
        <option value="">Select Subject</option>
        <?php foreach($subjects as $subject) : ?>
        <option value="<?= $subject->id ?>"><?= $subject->subject_name ?></option>
        <?php endforeach ?>
       </select>
      </div>
      <label for="question">Question</label>
      <div class="input-group mb-3">
      <!-- <span class="input-group-text">Description</span> -->
      <textarea id="editor" name="question" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <label for="option_a">Option A</label>
    <div class="input-group">
      <input type="text" name="option_a" class="form-control" placeholder="Option A">
    </div>
    <label for="option_b">Option B</label>
    <div class="input-group">
      <input type="text" name="option_b" class="form-control" placeholder="Option B">
    </div>
    <label for="option_c">Option C</label>
    <div class="input-group">
      <input type="text" name="option_c" class="form-control" placeholder="Option B">
    </div>
    <!-- <label for="option_d">Option D</label>
    <div class="input-group">
      <input type="text" name="option_d" class="form-control" placeholder="Option B">
    </div> -->
    <label for="name">Select Answer Option</label>
      <div class="input-group mb-3">
       <select name="option_d" id="" class="form-select form-select-lg mb-3">
        <option value="">Select Answer Option</option>
        <option value="option_a">Option A</option>
        <option value="option_b">Option B</option>
        <option value="option_c">Option C</option>
       </select>
      </div>

      <div class="input-group mt-5">
       <button type="submit" class="btn btn-primary">Create Post</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>


<?php include("../layout/footer.php"); ?>
<!-- <script>
 $(document).ready(function() {
  $('#summernote').summernote();
});
</script>

<script>
 $(document).ready(function() {
  $('#summernote_exercise').summernote();
});
</script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor_two' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>