<?php

namespace Libs\Database;

use PDOException;

class Course
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}
 public function CourseGetAll()
	{
		$statement = $this->db->query("SELECT * FROM courses");

		return $statement->fetchAll();
	}

	// insert data 
	public function CourseInsert($data)
	{
		try {
			$query = "INSERT INTO courses (course_name, created_at) VALUES (:course_name,  NOW())";
			$statement = $this->db->prepare($query);
			$statement->execute($data);
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
				return $e->getMessage()();
		}
	}

	

}