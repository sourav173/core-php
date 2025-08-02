<?php
function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}

// dd($_SERVER);

// function url($url) {
//   return $_SERVER["REQUEST_URI"] === $url;
// }

// function url($path) {
//     return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $path;
// }