<?php

/**
 * Setup application fast autoload
 * @param  [type] $class [description]
 */
spl_autoload_register(function($class) {
    static $autoload = null;

    if (class_exists($class, false) || interface_exists($class, false)) {
        return true;
    }

    if ($autoload === null) {
        $autoload = require_once(APPPATH . '/autoload.php');
    }

    if (isset($autoload[$class])) {
        include(APPPATH . '/' . $autoload[$class]);
        return class_exists($class, false) || interface_exists($class, false);
    }

    $class = ucfirst($class);

    if (isset($autoload[$class])) {
        include(APPPATH . '/' . $autoload[$class]);
        return class_exists($class, false) || interface_exists($class, false);
    }

    return false;
});

/**
 * Helper function for dump data
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
function trace($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}