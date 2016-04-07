<?php

define('ROOT', __DIR__);
define('VIEWS', ROOT . '/views');
define('MODELS', ROOT . '/models');
define('CONTROLLERS', ROOT . '/controllers');

/**
 * Register autoload class
 */
spl_autoload_register(function($name) {
  if (strpos($name, 'Controller') !== false) {
    $path = ROOT . "/controllers/{$name}.php";
  } else {
    $path = ROOT . "/models/{$name}.php";
  }

  if (file_exists($path)) {
    include $path;
  }
});

function trace($data) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}

/**
 * Application router
 */
$route = isset($_GET['route']) ? $_GET['route'] : 'index/index';
$action = 'index';
$controller = 'index';

if (strpos($route, '/') !== false) {
  list($controller, $action) = explode('/', $route);
} else if ($route) {
  $controller = $route;
}

$controllerName = ucfirst($controller) . 'Controller';
$controllerAction = $action . 'Action';
$controllerInstance = null;

if (class_exists($controllerName)) {
  $controllerInstance = new $controllerName(array(
    'controller' => $controller,
    'action' => $action,
    'route' => $route
  ));
} else {
  exit("<strong>Error</strong>: controller <strong>{$controllerName}</strong> not found.");
}

if (method_exists($controllerInstance, $controllerAction)) {
  $controllerInstance->$controllerAction();
} else {
  exit("<strong>Error</strong>: action <strong>{$controllerName}->{$controllerAction}</strong> not found.");
}

trace($_REQUEST);
trace(get_included_files());



