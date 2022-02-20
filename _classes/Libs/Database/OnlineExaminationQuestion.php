<?php 
namespace Libs\Database;

use PDOException;


class OnlineExaminationQuestion {

 private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}

 public function OnlineExaminationQuestiongetAll()
  {
    $statement = $this->db->query("
           SELECT examination_questions.*, courses.course_name, subjects.subject_name 
           FROM examination_questions
           LEFT JOIN subjects ON subjects.id = examination_questions.subject_id
           LEFT JOIN courses ON courses.id = examination_questions.course_id
        ");
    return $statement->fetchAll();
  }

    public function OnlineClassEnglishExamQuestionInsert($data)
	{
		try {
			$query = "INSERT INTO examination_questions (course_id, subject_id, question, option_a, option_b, option_c, option_d, created_at) VALUES (:course_id,:subject_id, :question, :option_a, :option_b, :option_c, :option_d,  NOW())";
			$statement = $this->db->prepare($query);
			$statement->execute($data);
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
				return $e->getMessage()();
		}
}

public function OnlineExaminationQuestionfindById($id)
	{
		$statement = $this->db->prepare("SELECT * FROM examination_questions 
  LEFT JOIN subjects ON subjects.id = examination_questions.subject_id 
  LEFT JOIN courses ON courses.id = examination_questions.course_id 
  WHERE examination_questions.id = :id");
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