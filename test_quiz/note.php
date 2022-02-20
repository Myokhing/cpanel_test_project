 <form action="test_quiz_result.php" method="post">
       <?php foreach($questions as $question): ?>
      <h2><?php echo $question->question; ?></h2>

        <div class="form-group">
         <label for="question_<?= $question->id ?>"><?= $question->question ?></label>
         <?php foreach($table->quiz_options($question->id) as $option): ?>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="question_<?= $question->id ?>" id="option_<?= $option->id ?>" value="<?= $option->id ?>">
           <label class="form-check-label" for="option_<?= $option->id ?>"><?= $option->option ?></label>
          </div>
         <?php endforeach; ?>
        </div>
       <?php endforeach; ?>
       <button type="submit" class="btn btn-primary">Submit</button>
      </form>

       <form action="test_quiz_result.php" method="post">
       <?php foreach($questions as $question): ?>
<?php $options = $table->quiz_options($question->id);
          ?>
          <h1><?php echo $question->id ?></h1>
        <div class="form-group">
         <label for="question"><?php echo $question->question ?></label>
         <select name="answer[<?php echo $question->id ?>]" class="form-control">
          <?php foreach($options as $option): ?>
          <option value="<?php echo $option->id ?>"><?php echo $option->option_answer ?></option>
          <?php endforeach; ?>
         </select>
        </div>
       <?php endforeach; ?>
       <button type="submit" class="btn btn-primary">Submit</button>
      </form>


      <div class="container">
<h1>Multiple Choice Questions Answers</h1>
<p>Please fill the details and answers the all questions-</p>
<div class="form-group">
<form action="score.php" method="post">
<?php
foreach($quesions as $ques) {
$options = $db->quiz_options($ques[0]);

?>
<h4><?php echo $ques[1]; ?></h4>
<div class="input-group-text" style="text-align: left; font-size: 18px;"> 
<ol>
<?php
foreach($options as $option) { 
 echo "<li><input type='radio' name='".$option[2]."' value='".$option[1]."' required/> ".$option[3]."</li>";
}
?>
</ol>
</div>

</div>
<div class="form-group">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</div>
</form>
</div>