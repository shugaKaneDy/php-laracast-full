<?php
// dd($uri);

// if($uri === BASE_APP . '/') {
//   require "controllers/index.php";
// } else if ($uri === BASE_APP . '/about')  {
//   require "controllers/about.php";
// } else if ($uri === BASE_APP . '/contact')  {
//   require "controllers/contact.php";
// } 

$routes = require('routes.php');

// if(array_key_exists($uri, $routes)) {
//   require $routes[$uri];
// } else {
//   abort();
// }

function routToController($uri, $routes) {
  if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

function abort($code = 404) {
  http_response_code($code);
  require "views/{$code}.php";
  die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routToController($uri, $routes);
