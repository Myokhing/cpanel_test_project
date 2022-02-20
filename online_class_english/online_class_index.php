<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\OnlineClasses;
$table = new OnlineClasses(new MySQL());
$online_classes = $table->DatagetAll();
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h2>OnlineClasses <span><a href="online_class_create_form.php" class="btn btn-primary">OnlineClasses Create</a></span></h2></div>
    <div class="card-header"><h2>Total OnlineClasses :<span class="badge bg-danger text-white"> <?= count($online_classes) ?></span></h2></div>
    <div class="card-body">
     <table class="table">
 <tr>
  <th>ID</th>
  <th>Title</th>
  <th>Course ID</th>
  <th>Subject Name</th>
  <th>Chapter Name</th>
  <th>Description</th>
  <th>Exercise</th>
  <th>Action</th>
 </tr>
 <tbody>
  <?php foreach($online_classes as $vlaue) : ?>
  <tr>
    <td><?= $vlaue ->id ?></td>
    <td><?= $vlaue ->title ?></td>
    <td><?= $vlaue ->course_name ?></td>
    <td><?= $vlaue ->subject_name ?></td>
    <td><?= $vlaue ->chapter_name?></td>
    <td><?= $vlaue ->description ?></td>
    <td><?= $vlaue ->exercise ?></td>
    <td><a href="online_class_show.php?id=<?= $vlaue->id ?>" class="btn btn-primary btn-sm">See More</a></td>
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