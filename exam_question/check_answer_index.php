<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\StudentOptionAnswer;
$table = new StudentOptionAnswer(new MySQL());
$student_check_answers = $table->StudentCheckAnswergetAll();
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <!-- <div class="card-header"><h2>Online Examination Questions <span><a href="" class="btn btn-primary">Online Examination Questions Create</a></span></h2></div> -->
    <div class="card-header"><h2>Total Online Examination Questions Answer :<span class="badge bg-danger text-white"> <?= count($student_check_answers) ?></span></h2></div>
    <div class="card-body">
     <table class="table table-danger">
 
 <tbody>
  <?php foreach($student_check_answers as $student_check_answer) : ?>
  <tr>
   <th>ID</th>
    <td><h6 class="badge bg-primary text-white" style="font-size: 15px;"><?= $student_check_answer ->id ?></h6></td>
  </tr>
  <tr>
   <th scope="col">Answer</th>
    <td><h6 class="display-6"><?= $student_check_answer ->student_option_answer ?></h6></td>
  </tr>
  <tr>
   <th>Created_At</th>
    <td><?= $student_check_answer ->created_at ?></td>
   
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