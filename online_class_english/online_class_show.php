<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\database\OnlineClasses;
$table = new OnlineClasses(new MySQL());
$id = $_GET['id'];
$table->OnlineClassfindById($id);
$show_data = $table->OnlineClassfindById($id);
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header">
     <h1>OnlineClasses Show Details <span><a href="online_class_index.php" class="btn btn-primary">Back</a></span></h1>
    </div>
    <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <td><?= $show_data->id ?></td>
      </tr>
      <tr>
       <th>Title</th>
       <td><?= $show_data->title ?></td>
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
       <th>Description</th>
       <td><?= $show_data->description ?></td>
      </tr>
      <tr>
       <th>Exercise</th>
       <td><?= $show_data->exercise ?></td>
      </tr>
      <tr>
       <th>Created At</th>
       <td><?= $show_data->created_at ?></td>
      </tr>
     </table>
     <div class="input-group">
      <a href="online_class_index.php" class="btn btn-primary">Back</a>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

<?php include("../layout/footer.php") ?>