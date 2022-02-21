<?php
include("../layout/head.php");
include("../layout/nav.php"); 
include("../layout/header.php");

?>
<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-title">
     <h1>Student Create</h1>
    </div>
    <div class="card-body">
     <form action="_actions/student_create.php" method="POST">
      <label for="name">Student Name</label>
      <div class="input-group">
       <input type="text" name="name" id="" class="form-control">
      </div>
      <label for="join_date">Student Join Date</label>
      <div class="input-group">
       
       <input type="text" name="join_date" id="" class="form-control">
      </div>
      <label for="bio">Student Bio</label>
      <div class="input-group">
       
       <input type="text" name="bio" id="" class="form-control">
      </div>
      <label for="room_id">Student Room ID</label>
      <div class="input-group">
       
       <input type="text" name="room_id" id="" class="form-control">
      </div>
      <div class="input-group">
       <button type="submit" class="btn btn-primary">Create Student</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>




<?php
include("../layout/footer.php");