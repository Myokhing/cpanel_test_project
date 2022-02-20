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
     <h1>Chpater Create</h1>
    </div>
    <div class="card-body">
     <form action="../_actions/chapter_create.php" method="POST">
      <label for="name">Chapter Name</label>
      <div class="input-group">
       <input type="text" name="chapter_name" id="" class="form-control">
      </div>
      <div class="input-group mt-5">
       <button type="submit" class="btn btn-primary">Create Chpater</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
<?php include("../layout/footer.php"); ?>