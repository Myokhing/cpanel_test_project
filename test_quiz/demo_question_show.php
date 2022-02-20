hello world<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\DemoQuestion;
$table = new DemoQuestion(new MySQL());
$id = $_GET['id'];
$table->DemoQuestionfindById($id);
$show_data = $table->DemoQuestionfindById($id);
$answer_option = $table->GetAnswerOption();
?>

<div class="container">
 <div class="row">
  <div class="col-lg-6">
   <div class="card">
    <div class="card-header">
     <h1>Demo Question Show Details <span><a href="demo_question_index.php" class="btn btn-primary">Back</a></span></h1>
    </div>
    <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <td><?= $show_data->id ?></td>
      </tr>
      <tr>
       <th>Course Name</th>
       <td><?= $show_data->course_name ?></td>
      </tr>
      <tr>
       <th>Subject Name</th>
       <td><?= $show_data->subject_name ?></td>
      </tr>
      <tr>
       <th>Chapter Name</th>
       <td><?= $show_data->chapter_name ?></td>
      </tr>
      <tr>
       <th>Question</th>
       <td><?= $show_data->question ?></td>
      </tr>
      
      <tr>
       <th>Created At</th>
       <td><?= $show_data->created_at ?></td>
      </tr>
     </table>
     <div class="input-group">
      <a href="demo_question_index.php" class="btn btn-primary">Back</a>
     </div>
    </div>
   </div>
  </div>
  <div class="col-lg-6">
   <div class="card">
   <div class="card-header">Try It</div>
   <div class="card-body">
    <table>
     <tr>
      <th>Question</th>
      <td><?= $show_data->question ?></td>
     </tr>
    </table>
   </div>
  </div>
  <div class="card mt-3">
   <div class="card-header">Answer Option</div>
   <div class="card-body">
       <form action="" method="POST">
        <div class="form-group">
          <label for="question">Answer</label>
          <?php foreach ($answer_option as $option) : ?>
           <div class="form-check">
            <input class="form-check-input" type="radio" name="options[]" value="<?= $option->id ?>">
            <label class="form-check-label"><?= $option->option_a ?></label>
           </div>
           <div class="form-check">
            <input class="form-check-input" type="radio" name="options[]" value="<?= $option->id ?>">
            <label for="" class="form-check-label"><?= $option->option_b ?></label>
           </div>
           <div class="form-check">
            <input class="form-check-input" type="radio" name="options[]" value="<?= $option->id ?>">
            <label for="" class="form-check-label"><?= $option->option_c ?></label>
           </div>
          <?php endforeach; ?>
          <div class="form-group mt-3">
           <input type="submit" class="btn btn-primary form-control" name="submit" value="Submit">
          </div>
   </div>
       </form>
  </div>
  </div>
 </div>
</div>

<?php include("../layout/footer.php") ?>