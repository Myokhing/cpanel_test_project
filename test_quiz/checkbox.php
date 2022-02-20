<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>php checkbox option</title>
</head>
<body>
 <h1>please select programming language</h1>

 <form action="" method="POST">
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="php" value="php">
   <label class="form-check-label" for="php">php</label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="java" value="java">
   <label class="form-check-label" for="java">java</label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="c" value="c">
   <label class="form-check-label" for="c">c</label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="c++" value="c++">
   <label class="form-check-label" for="c++">c++</label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="python" value="python">
   <label class="form-check-label" for="python">python</label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="javascript" value="javascript">
   <label class="form-check-label" for="javascript">javascript</label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="c#" value="c#">
   <label class="form-check-label" for="c#">c#</label>
  </div>
  <div class="form-check">
   <input class="form-check-input" type="checkbox" name="language[]" id="ruby" value="ruby">
   <label class="form-check-label" for="ruby">ruby</label>
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
 </form>

 <?php 
  if(isset($_POST['submit'])){
   $language = $_POST['language'];
   echo "<h1>You have selected:</h1>";
   echo "<ul>";
   foreach($language as $lang){
    echo "<li>$lang</li>";
   }
   echo "</ul>";
  }
  
 ?>
</body>
</html>