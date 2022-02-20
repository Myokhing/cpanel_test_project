<?php 
namespace Libs\Database;

use PDOException;


class DemoQuestion {

 private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}

 public function DemoQuestionGetDataAll() {
  $statement = $this->db->query("
           SELECT demo_questions.*, courses.course_name, subjects.subject_name, chapters.chapter_name 
           FROM demo_questions
           LEFT JOIN subjects ON subjects.id = demo_questions.subject_id
           LEFT JOIN chapters ON chapters.id = demo_questions.chapter_id
           LEFT JOIN courses ON courses.id = demo_questions.course_id
        ");
    return $statement->fetchAll();
 }


 public function DemoQuestionfindById($id)
	{
		$statement = $this->db->prepare("SELECT * FROM demo_questions 
		LEFT JOIN subjects ON subjects.id = demo_questions.subject_id 
  LEFT JOIN courses ON courses.id = demo_questions.course_id
		Left JOIN chapters ON chapters.id = demo_questions.chapter_id
		WHERE demo_questions.id = :id"); 
		$statement->execute([':id' => $id]);
		$row = $statement->fetch();

		return $row ?? false;
	}

	public function GetAnswerOption() {
  $statement = $this->db->query("SELECT * FROM demo_answer_options WHERE question_id = 1");

  return $statement->fetchAll();
 }
 }

