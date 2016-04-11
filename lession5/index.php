<?php

define('ROOT', __DIR__);
define('VIEWS', ROOT . '/views');
define('MODELS', ROOT . '/models');
define('HELPERS', ROOT . '/helpers');
define('CONTROLLERS', ROOT . '/controllers');

require HELPERS . '/Model.php';
require HELPERS . '/Controller.php';

/**
 * Register autoload class
 */
spl_autoload_register(function($name) {
  if (strpos($name, 'Controller') !== false) {
    $path = CONTROLLERS . "/{$name}.php";
  } else {
    $path = MODELS . "/{$name}.php";
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
 * Create a link to router
 * @example __('detail/1');
 * @example __('index/detail?id=1');
 *
 * @param string $router
 * @return string
 */
function __($router = '') {
  static $dir = null;

  if ($dir === null) {
    $dir = '/' . trim(dirname($_SERVER['SCRIPT_NAME']), '\,/');
  }

  return ($router != "/" ? "{$dir}/{$router}" : "{$dir}/");
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



