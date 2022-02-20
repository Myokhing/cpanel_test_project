<?php
include("../layout/head.php");
include("../layout/nav.php"); 
include("../layout/header.php");

?>
<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header">
     <h1>Course Create</h1>
    </div>
    <div class="card-body">
     <form action="../_actions/course_create.php" method="POST">
      <label for="name">Course Name</label>
      <div class="input-group">
       <input type="text" name="course_name" id="" class="form-control">
      </div>
      <div class="input-group mt-5">
       <button type="submit" class="btn btn-primary">Create Course</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
<?php include("../layout/footer.php"); ?>