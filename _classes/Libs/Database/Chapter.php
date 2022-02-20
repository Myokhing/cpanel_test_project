<?php

namespace Libs\Database;

use PDOException;

class Chapter
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}
 public function ChpaterGetAll()
	{
		$statement = $this->db->query("SELECT * FROM chapters");

		return $statement->fetchAll();
	}

	// insert data 
	public function ChapterInsert($data)
	{
		try {
			$query = "INSERT INTO chapters (chapter_name, created_at) VALUES (:chapter_name,  NOW())";
			$statement = $this->db->prepare($query);
			$statement->execute($data);
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
				return $e->getMessage()();
		}
	}

	

}