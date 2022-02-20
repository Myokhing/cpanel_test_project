<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\StudentAnswer;
$table = new StudentAnswer(new MySQL());
$answers = $table->StudentAnswergetAll();
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h2>Online Examination Questions <span><a href="online_class_create_form.php" class="btn btn-primary">Online Examination Questions Create</a></span></h2></div>
    <div class="card-header"><h2>Total Online Examination Questions :<span class="badge bg-danger text-white"> <?= count($answers) ?></span></h2></div>
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
  <?php foreach($answers as $answer) : ?>
  <tr>
    <td><?= $answer ->id ?></td>
    <td><?= $answer ->course_name ?></td>
    <td><?= $answer ->subject_name ?></td>
    <td><?= $answer ->question?></td>
    <td><?= $answer ->option_a ?></td>
    <td><?= $answer ->option_b ?></td>
    <td><a href="student_answer_show.php?id=<?= $answer->id ?>" class="btn btn-primary btn-sm">See More</a></td>
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