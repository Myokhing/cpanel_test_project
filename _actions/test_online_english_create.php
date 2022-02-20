<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\OnlineClasses;
$data = [
  "title" => $_POST['title'],
  "course_id" => $_POST['course_id'],
  "subject_id" => $_POST['subject_id'],
  "chapter_id" => $_POST['chapter_id'],
  "description" => $_POST['description'],
  "exercise" => $_POST['exercise']
];
$table = new OnlineClasses(new MySQL());
if ($table) {
 $table->OnlineClassEnglishInsert($data);
 header("Location: ../online_class_english/online_class_index.php");
}else{
 header("Location: ../online_class_english/online_class_create_form.php");
}