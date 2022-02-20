<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\OnlineExaminationQuestion;
$table = new OnlineExaminationQuestion(new MySQL());
$id = $_GET['id'];
$table->OnlineExaminationQuestionfindById($id);
$exam_question_show_data = $table->OnlineExaminationQuestionfindById($id);
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header">
     <h1>Online Examination Questions <span><a href="exam_question_index.php" class="btn btn-primary">Back</a></span></h1>
    </div>
    <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <td><?= $exam_question_show_data->id ?></td>
      </tr>
      <tr>
       <th>Course Name</th>
       <td><?= $exam_question_show_data->course_name ?></td>
      </tr>
      <tr>
       <th>Subject Name</th>
       <td><?= $exam_question_show_data->subject_name ?></td>
      </tr>
      <tr>
       <th>Question</th>
       <td><?= $exam_question_show_data->question ?></td>
      </tr>
      <tr>
       <th>Option_A</th>
       <td><?= $exam_question_show_data->option_a ?></td>
      </tr>
      <tr>
       <th>Option_B</th>
       <td><?= $exam_question_show_data->option_b ?></td>
      </tr>
      <tr>
       <th>Option_C</th>
       <td><?= $exam_question_show_data->option_c ?></td>
      </tr>
      <tr>
       <th>Option_D</th>
       <td><?= $exam_question_show_data->option_d ?></td>
      </tr>
      
       <th>Created At</th>
       <td><?= $exam_question_show_data->created_at ?></td>
      </tr>
     </table>
     <div class="input-group">
      <a href="exam_question_index.php" class="btn btn-primary">Back</a>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

<?php include("../layout/footer.php") ?>