<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\StudentAnswer;
use Libs\Database\StudentOptionAnswer;
$student_option = new StudentOptionAnswer(new MySQL());
$student_option->StudentCheckAnswergetAll();
$check_answers = $student_option->StudentCheckAnswergetAll();

$table = new StudentAnswer(new MySQL());
$id = $_GET['id'];
$table->StudentAnswerfindById($id);
$student_answer_show_data = $table->StudentAnswerfindById($id);
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
       <td><?= $student_answer_show_data->id ?></td>
      </tr>
      <tr>
       <th>Course Name</th>
       <td><?= $student_answer_show_data->course_name ?></td>
      </tr>
      <tr>
       <th>Subject Name</th>
       <td><?= $student_answer_show_data->subject_name ?></td>
      </tr>
      <tr>
       <th>Question</th>
       <td><?= $student_answer_show_data->question ?></td>
      </tr>
      <tr>
       <th>Option_A</th>
       <td><?= $student_answer_show_data->option_a ?></td>
      </tr>
      <tr>
       <th>Option_B</th>
       <td><?= $student_answer_show_data->option_b ?></td>
      </tr>
      <tr>
       <th>Option_C</th>
       <td><?= $student_answer_show_data->option_c ?></td>
      </tr>
      <tr>
       <th>Option_D</th>
       <td><?= $student_answer_show_data->option_d ?></td>
      </tr>
      
      <tr>
       <th>Created At</th>
       <td><?= $student_answer_show_data->created_at ?></td>
      </tr>
     </table>
     <div class="input-group">
      <a href="online_class_index.php" class="btn btn-primary">Back</a>
     </div>
    </div>
   </div>
  </div>
  <div class="col-lg-4">
   <div class="row">
    <div class="card">
     <div class="card-header"><h6 class="display-6">You can answer this question <span class="badge bg-danger text-white"2>Try It</span></h6></div>
     <div class="card-body">
      <table>
       <tr>
        <th>Question : </th>
        <td><?= $student_answer_show_data->question ?></td>
       </tr>
       <tr>
        <th>Option_A : </th>
        <td><?= $student_answer_show_data->option_a ?></td>
       </tr>
       <tr>
        <th>Option_B : </th>
        <td><?= $student_answer_show_data->option_b ?></td>
       </tr>
       <tr>
        <th>Option_C : </th>
        <td><?= $student_answer_show_data->option_c ?></td>
       </tr>
       <tr>
        <th>Option_D : </th>
        <td><?= $student_answer_show_data->option_d ?></td>
       </tr>
       <tr>
        <td>
         <form action="../_actions/student_answer_create.php" method="POST">
          <div class="form-group">
           <label for="">Select Your Answer</label>
            <select name="student_option_answer" class="form-select form-select-lg mb-3">
             <option value="">Select Your Answer</option>
             <option value="<?= $student_answer_show_data->option_a ?>">A</option>
             <option value="<?= $student_answer_show_data->option_b ?>">B</option>
             <option value="<?= $student_answer_show_data->option_c ?>">C</option>
             <option value="<?= $student_answer_show_data->option_d ?>">D</option>
            </select>
          </div>
          <div class="input-group">
           <input type="submit" class="btn btn-primary" value="Submit">
           <span><a href="check_answer_index.php" class="btn btn-warning btn-sm ms-auto">Check Answer</a></span>
          </div>
         </form>
        </td>
        </tr>
      </table>
     </div>
    </div>

    <div class="card">
      <div class="card-header"><h6>Result</h6></div>
      <div class="card-body">
        <table class="table">
         <?php foreach($check_answers as $check_answer) : ?>
  <tr>
   <th>ID</th>
    <td><h6 class="badge bg-primary text-white" style="font-size: 15px;"><?= $check_answer ->id ?></h6></td>
  </tr>
  <tr>
   <th scope="col">Answer</th>
    <td><h6 class="display-6"><?= $check_answer ->student_option_answer ?></h6></td>
  </tr>
  <tr>
   <th>Created_At</th>
    <td><?= $check_answer ->created_at ?></td>
   
  </tr>
  <tr>
    <th>Result</th>
    <td>
      <?php 
        if ($check_answer->student_option_answer == $student_answer_show_data->option_a) {
          echo "<div class='alert-danger'>your answer is right</div>";
        }else{
          echo "your answer is false";
        }
      ?>
    </td>
  </tr>
  
  <?php endforeach ?>

        </table>
      </div>
    </div>
   </div>
  </div>
 </div>
</div>

<?php include("../layout/footer.php") ?>

