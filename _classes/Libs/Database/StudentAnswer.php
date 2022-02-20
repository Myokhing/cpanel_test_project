<?php 
namespace Libs\Database;

use PDOException;


class StudentAnswer {

 private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}

 public function StudentAnswergetAll()
  {
    $statement = $this->db->query("
           SELECT option_answers.*, courses.course_name, subjects.subject_name,  examination_questions.question
           FROM option_answers
           LEFT JOIN subjects ON subjects.id = option_answers.subject_id
           LEFT JOIN courses ON courses.id = subjects.course_id
           LEFT JOIN examination_questions ON examination_questions.id = option_answers.question_id
        ");
    return $statement->fetchAll();
  }

    public function StudentAnswerInsert($data)
	{
		try {
			$query = "INSERT INTO option_answers (course_id, subject_id, question_id, option_a, option_b, option_c, option_d, option_answer) VALUES (:course_id,:subject_id, :question_id, :option_a, :option_b, option_c, option_d, option_answer   NOW())";
			$statement = $this->db->prepare($query);
			$statement->execute($data);
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
				return $e->getMessage()();
		}
}

public function StudentAnswerfindById($id)
	{
		$statement = $this->db->prepare("SELECT * FROM option_answers 
  LEFT JOIN subjects ON subjects.id = option_answers.subject_id 
  LEFT JOIN courses ON courses.id = option_answers.course_id
  LEFT JOIN examination_questions on examination_questions.id = option_answers.question_id
  WHERE option_answers.id = :id"); 
		$statement->execute([':id' => $id]);
		$row = $statement->fetch();

		return $row ?? false;
	}

}

// SELECT *
// FROM posts p
//   LEFT JOIN comments c
//     ON p.post_id = c.post_id
//     AND c.deleted = 0
//   LEFT JOIN replies r
//     ON p.post_id = r.post_id
//     AND r.deleted = 0  
// WHERE p.user_id = $user_id
//ORDER BY online_classes.id DESC
// SELECT * FROM examination_questions WHERE id = :id