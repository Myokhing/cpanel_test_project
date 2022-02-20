<?php 
namespace Libs\Database;

use PDOException;


class OnlineClasses {

 private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}

 public function DatagetAll()
  {
    $statement = $this->db->query("
           SELECT online_classes.*, courses.course_name, subjects.subject_name, chapters.chapter_name 
           FROM online_classes
           LEFT JOIN subjects ON subjects.id = online_classes.subject_id
           LEFT JOIN chapters ON chapters.id = online_classes.chapter_id
           LEFT JOIN courses ON courses.id = subjects.course_id
        ");
    return $statement->fetchAll();
  }

    public function OnlineClassEnglishInsert($data)
	{
		try {
			$query = "INSERT INTO online_classes (title, course_id, subject_id, chapter_id, description, exercise, created_at) VALUES (:title, :course_id,:subject_id, :chapter_id, :description, :exercise,  NOW())";
			$statement = $this->db->prepare($query);
			$statement->execute($data);
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
				return $e->getMessage()();
		}
}

public function OnlineClassfindById($id)
	{
		$statement = $this->db->prepare("SELECT * FROM online_classes 
		LEFT JOIN subjects ON subjects.id = online_classes.subject_id 
  LEFT JOIN courses ON courses.id = online_classes.course_id
		Left JOIN chapters ON chapters.id = online_classes.chapter_id
		WHERE online_classes.id = :id"); 
		$statement->execute([':id' => $id]);
		$row = $statement->fetch();

		return $row ?? false;
	}

}

//ORDER BY online_classes.id DESC