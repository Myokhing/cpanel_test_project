<?php

namespace Libs\Database;

use PDOException;

class TestQuiz
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}
 public function getQuiz() {
  $statement = $this->db->query("SELECT * FROM test_quiz WHERE is_enabled = 1");

  return $statement->fetchAll();
 }

	public function quiz_options($id) {
		$statement = $this->db->prepare("SELECT * FROM test_quiz_options WHERE test_quiz_id = :id");
		$statement->bindParam(":id", $id);
		$statement->execute();

		return $statement->fetchAll();
	}

	public function answer($id) {
		$statement = $this->db->prepare("SELECT * FROM test_quiz_answers WHERE id = :id");
		$statement->bindParam(":id", $id);
		$statement->execute();

		return $statement->fetch();
	}
 }
