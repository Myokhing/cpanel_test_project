<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\Quiz;


$table = new Quiz(new MySQL());
$questions = $table->get_questions();


?>
<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header">
     <h3>Test Quiz</h3>
    </div>
    <div class="card-body">
     <table class="table table-responsive">
      <tr>
       <th>ID</th>
       <th>Question</th>
      </tr>
      <tbody>
       <?php foreach($questions as $question): ?>
        <tr>
         <td><?= $question->qid ?></td>
         <td><?= $question->question ?></td>
        </tr>
       <?php endforeach; ?>
      </tbody>
     </table>
    </div>
   </div>
   <div class="row">
    <div class="card">
     <div class="card-header">
      <h3>Quiz Options</h3>
     </div>
     <div class="card-header">
      <div class="form-group">
       <form action="../_actions/test_quiz_result.php">
        <?php foreach ($questions as $ques) : ?>
         <div class="form-group">
          <label for="question"><?= $ques->question ?></label>
          <?php $options = $table->quiz_options($ques->qid); ?>
          <?php foreach ($options as $option) : ?>
           <div class="form-check">
            <input class="form-check-input" type="radio" name="<?= $ques->qid ?>" id="<?= $option->oid ?>" value="<?= $option->qid ?>">
            <label class="form-check-label" for="<?= $option->oid ?>"><?= $option->option_result ?></label>
           </div>
          <?php endforeach; ?>
          <?php endforeach; ?>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>

         </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<?php include("../layout/footer.php"); ?>


