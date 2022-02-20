<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\Quiz;

$table = new Quiz(new MySQL());
//$qid = $_POST['qid'];
//$answer_results = $table->answer($qid);
$score = 0;

// // foreach ($answer_results as $answer_result) {
// //     if ($answer_result->answer_id == $answer_result->option_id) {
// //         $score++;
// //     }
// }
foreach ($_POST as $answer_result => $option_id) {
    $answer_data = $table->answer($option_id);
    if ($answer_data->qa_id == $answer_data->option_id) {
        $score++;
    }
}
$score = $score	/ 4 *100;
if($score < 50)
{
	echo '<h2>You need to score at least 50% to pass the exam.</h2>';
}
else {
	echo '<h2>You have passed the exam and scored '.$score.'%.</h2>';
}
// $score = $score * 100 / count($answer_results);
// if ($score < 50) {
//     $result = "You are not qualified to take this test";
// } else {
//     $result = "You are qualified to take this test";
// }
?>

