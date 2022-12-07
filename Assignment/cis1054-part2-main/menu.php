<?php

require_once __DIR__.'/database.php';
$db = new Db();    

$itemcategory= $db -> select("SELECT id, name FROM category order by name");
$connect = mysqli_connect("localhost", "Assignment", "assignment", "menu");