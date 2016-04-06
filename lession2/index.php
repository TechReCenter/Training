<?php

define('ROOT', __DIR__);

require(ROOT . '/models/data.php');

$route = isset($_GET['route']) ? $_GET['route'] : 'index';

$path = ROOT . "/controllers/{$route}.php";

if (file_exists($path)) {
  require $path;
} else {
  die('Error: controller not found.');
}