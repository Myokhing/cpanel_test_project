<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\StudentOptionAnswer;
$data = [
 "student_option_answer" => $_POST['student_option_answer']
];
$table = new StudentOptionAnswer(new MySQL());
if ($table) {
 $table->StudentOptionAnswerInsert($data);
 header("Location: ../exam_question/check_answer_index.php");
}else{
 header("Location: ../exam_question/student_answer_create_form.php");
}