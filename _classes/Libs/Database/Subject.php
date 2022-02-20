<?php

namespace Libs\Database;

use PDOException;

class Subject
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}
 public function SubjectGetAll()
	{
		$statement = $this->db->query("SELECT * FROM subjects");

		return $statement->fetchAll();
	}

	public function getAll()
	{
		$statement = $this->db->query("
            SELECT subjects.*, courses.course_name AS course_name, courses.created_at AS course_created_at
            FROM subjects LEFT JOIN courses
            ON subjects.course_id = courses.id
        ");

		return $statement->fetchAll();
	}
	// insert data 
	public function SubjectInsert($data)
	{
		try {
			$query = "INSERT INTO subjects (subject_name, course_id, created_at) VALUES (:subject_name, :course_id,  NOW())";
			$statement = $this->db->prepare($query);
			$statement->execute($data);
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
				return $e->getMessage()();
		}
	}



}