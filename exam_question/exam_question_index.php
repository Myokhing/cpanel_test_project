<?php
include("../vendor/autoload.php");
//include("../layout/css/style.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\OnlineExaminationQuestion;
$table = new OnlineExaminationQuestion(new MySQL());
$questions = $table->OnlineExaminationQuestiongetAll();
?>

<div class="container">
 <div class="row">
   <!-- <h2 class="test_css">Hello world</h2> -->
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h2>Online Examination Questions <span><a href="exam_create_form.php" class="btn btn-primary">Online Examination Questions Create</a></span></h2></div>
    <div class="card-header"><h2>Total Online Examination Questions :<span class="badge bg-danger text-white"> <?= count($questions) ?></span></h2></div>
    <div class="card-body">
     <table class="table">
 <tr>
  <th>ID</th>
  <th>Course ID</th>
  <th>Subject Name</th>
  <th>Questions</th>
  <th>Option_A</th>
  <th>Option_B</th>
  <th>Action</th>
 </tr>
 <tbody>
  <?php foreach($questions as $question) : ?>
  <tr>
    <td><?= $question ->id ?></td>
    <td><?= $question ->course_name ?></td>
    <td><?= $question ->subject_name ?></td>
    <td><?= $question ->question?></td>
    <td><?= $question ->option_a ?></td>
    <td><?= $question ->option_b ?></td>
    <td><a href="exam_question_show.php?id=<?= $question->id ?>" class="btn btn-primary btn-sm">See More</a></td>
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