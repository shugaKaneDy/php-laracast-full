<?php

require "initialize.php";
require "functions.php";
require "Database.php";
// require "router.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

dd($posts);