<?php
$config = require("config.php");
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;

$id = $_GET['id'];

// $note = $db->query(
//   'SELECT * FROM notes WHERE id = :id',
//   [
//     ":id" => $id
//   ]
// )->fetch();
// if(! $note) {
//   abort();
// }
// if($note['user_id'] !== $currentUserId) {
//   abort(Response::FORBIDDEN);
// } 

$note = $db->query(
  'SELECT * FROM notes WHERE id = :id',
  [
    ":id" => $id
  ]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

require "views/note.view.php";
