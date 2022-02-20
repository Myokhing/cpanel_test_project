<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\Course;
$data = [
 "course_name" => $_POST['course_name']
];
$table = new Course(new MySQL());
if ($table) {
 $table->CourseInsert($data);
 header("Location: ../course/course_index.php");
}else{
 header("Location: ../course/course_create_form.php");
}