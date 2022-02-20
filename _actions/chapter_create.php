<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\Chapter;
$data = [
 "chapter_name" => $_POST['chapter_name']
];
$table = new Chapter(new MySQL());
if ($table) {
 $table->ChapterInsert($data);
 header("Location: ../chapter/chapter_index.php");
}else{
 header("Location: ../chapter/chapter_create_form.php");
}