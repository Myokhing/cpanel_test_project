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
     <form action="../_actions/test_online_english_create.php" method="POST">
      <label for="title">Title</label>
      <div class="input-group">
        <input type="text" class="form-control" name="title">
      </div>
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

      <label for="name">Subject Chapter</label>
      <div class="input-group mb-3">
       <select name="chapter_id" id="" class="form-select form-select-lg mb-3">
        <option value="">Select Chapter</option>
        <?php foreach($chapters as $chapter) : ?>
        <option value="<?= $chapter->id ?>"><?= $chapter->chapter_name ?></option>
        <?php endforeach ?>
       </select>
      </div>

      <label for="description">Question</label>
      <div class="input-group mb-3">
      <!-- <span class="input-group-text">Description</span> -->
      <textarea id="editor" name="description" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <label for="description">Exercise</label>
      <div class="input-group mb-3">
      <!-- <span class="input-group-text">Description</span> -->
      <textarea id="editor_two" name="exercise" class="form-control" aria-label="With textarea"></textarea>
    </div>
          <div class="input-group mt-5">
       <button type="submit" class="btn btn-primary">Create Online Calss English</button>
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