<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\TestQuiz;


$table = new TestQuiz(new MySQL());
$questions = $table->getQuiz();


?>
<div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h3>Test Quiz</h3>
     </div>
     <div class="card-header"><h6 class="display-6">Totla Quiz : <span class="badge bg-danger text-white"> <?= count($questions) ?></span></h6></div>
     <div class="card-body">
      <table class="table table-responsive">
       <tr>
        <th>ID</th>
        <th>Question</th>
       </tr>
       <tbody>
        <?php foreach($questions as $question): ?>
         <tr>
          <td><?= $question->id ?></td>
          <td><?= $question->question ?></td>
         </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h3>Test Quiz</h3>
     </div>
     <div class="card-body">
      <form action="../_actions/test_quiz_result.php" method="post">
       <?php foreach($questions as $question): ?>
<?php $options = $table->quiz_options($question->id);
          ?>
       <div class="form-group">
        <label for="question"><?= $question->question ?></label>
        <?php foreach($options as $option): ?>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="<?= $question->id ?>" id="<?= $option->id ?>" value="<?= $option->id ?>">
          <label class="form-check-label" for="<?= $option->id ?>"><?= $option->option_answer ?></label>
         </div>
        <?php endforeach; ?>
       <?php endforeach; ?>
       <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     </div>
    </div>
   </div>
  </div>
</div>

<?php include("../layout/footer.php"); ?>