<?php

namespace Libs\Database;

use PDOException;

class Student
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}
 public function getAll()
	{
		$statement = $this->db->query("SELECT * FROM students");

		return $statement->fetchAll();
	}

	// insert data 
	public function insert($data)
	{
		try {
			$query = "INSERT INTO students (name, join_date, bio, room_id, created_at) VALUES (:name, :join_date, :bio, :room_id, NOW())";
			$statement = $this->db->prepare($query);
			$statement->execute($data);
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
				return $e->getMessage()();
		}
	}

}