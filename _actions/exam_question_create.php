<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\OnlineExaminationQuestion;
$data = [
 "course_id" => $_POST['course_id'],
 "subject_id" => $_POST['subject_id'],
 "question" => $_POST['question'],
 "option_a" => $_POST['option_a'],
 "option_b" => $_POST['option_b'],
 "option_c" => $_POST['option_c'],
 "option_d" => $_POST['option_d']
];
$table = new OnlineExaminationQuestion(new MySQL());
if ($table) {
 //echo $table->OnlineClassEnglishExamQuestionInsert($data);
 $table->OnlineClassEnglishExamQuestionInsert($data);
 header("Location: ../exam_question/exam_question_index.php");
}else{
 header("Location: ../exam_question/exam_create_form.php");
}