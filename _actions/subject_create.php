<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\Subject;
$data = [
 "subject_name" => $_POST['subject_name'],
 "course_id" => $_POST['course_id']
];
$table = new Subject(new MySQL());
if ($table) {
 $table->SubjectInsert($data);
 header("Location: ../subject/subject_index.php");
}else{
 header("Location: ../subject/subject_create_form.php");
}