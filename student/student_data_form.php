<?php
include("layout/head.php")
?>

<body> 
    <?php
    include("layout/nav.php"); 
    include("layout/header.php");
    ?>
 <div class="container">
  <div class="row">
   <div class="col-lg-6">
    <h1>Create Student</h1>
    <form action="_actions/create_student.php" method="POST">
     <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control">
     </div>
     <div class="form-group">
      <label for="join_date">join_date</label>
      <input type="text" name="join_date" class="form-control">
     </div>
     <div class="form-group">
      <label for="bio">Bio</label>
      <input type="text" name="bio" class="form-control">
     </div>
     <div class="form-group">
      <label for="room_id">Room ID</label>
      <input type="text" name="room_id" class="form-control">
     </div>
     <div class="form-group">
      <input type="submit" value="Create" class="btn btn-primary">
     </div>
    </form>
   </div>
  </div>
 </div>


<?php include("layout/footer.php"); ?>