<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\Database\Chapter;
$table = new Chapter(new MySQL());
$chapters = $table->ChpaterGetAll();
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h2>Chpater Name <span><a href="chapter_create_form.php" class="btn btn-primary">Chapter Create</a></span></h2></div>
    <div class="card-header"><h2>Total Chapter :<span class="badge bg-danger text-white"> <?= count($chapters) ?></span></h2></div>
    <div class="card-body">
     <table class="table">
 <tr>
  <th>ID</th>
  <th>Chpater Name</th>
  <th>Created_at</th>
 </tr>
 <tbody>
  <?php foreach($chapters as $chapter) : ?>
  <tr>
    <td><?= $chapter ->id ?></td>
    <td><?= $chapter ->chapter_name ?></td>
    <td><?= $chapter ->created_at ?></td>
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