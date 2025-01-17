<?php

function dd($value) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function urlIs($value) {
  return parse_url($_SERVER['REQUEST_URI'])['path']  === $value;
}

function authorize($condition, $status = Response::FORBIDDEN) {

  if(! $condition) {
    abort($status);
  }
}