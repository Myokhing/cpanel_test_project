<?php
include("../vendor/autoload.php");

include("../layout/head.php");

//use Libs\Database\DemoQuestion;
use Libs\Database\MySQL;
use Libs\database\DemoQuestion;


$table = new DemoQuestion(new MySQL());
$demo_questions = $table->DemoQuestionGetDataAll();

?>

<body> 
    <?php
    include("../layout/nav.php"); 
    include("../layout/header.php");
    ?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h1>Demo Question : <span><a href="" class="btn btn-primary">Create Question</a></span></h1></div>
   </div>
   <div class="card-body">
    <table class="table table-responsive">
     <tr>
      <th>ID</th>
      <th>Question</th>
      <th>Action</th>
     </tr>
     <tbody>
      <?php foreach($demo_questions as $demo_question): ?>
       <tr>
        <td><?= $demo_question->id ?></td>
        <td><?= $demo_question->question ?></td>
        <td><a href="demo_question_show.php?id=<?= $demo_question->id ?>" class="btn btn-warning btn-sm">See More</a></td>
       </tr>
      <?php endforeach; ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>

<?php include("../layout/footer.php"); ?>