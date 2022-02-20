<?php

namespace Libs\Database;

use PDOException;

class Quiz
{
	private $db = null;

	public function __construct(MySQL $db)
	{
		$this->db = $db->connect();
	}
 public function get_questions(){
  $statement = $this->db->query("SELECT * FROM questions WHERE is_enabled = 1");

  return $statement->fetchAll();
 }

 public function quiz_options($qid){
  $statement = $this->db->query("SELECT * FROM quiz_options WHERE qid = '$qid' AND is_enabled = 1");
  return $statement->fetchAll();
 }
 
 public function answer($qid){
  $statement = $this->db->query("SELECT * FROM quiz_options WHERE qid = '$qid' ");
  return $statement->fetchAll();
 }
  }
