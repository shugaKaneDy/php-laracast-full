<?php

require "initialize.php";
require "functions.php";
require "Database.php";
// require "router.php";


$config = require("config.php");

$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM posts WHERE id = 1")->fetch();

dd($posts);