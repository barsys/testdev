<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */

$paths = array(
    '/vagetable/vagetable-web/vendor/zendframework/zendframework/library',
    '.',
);
set_include_path(implode(PATH_SEPARATOR, $paths));
 
$path = '/vagetable/vagetable-web/vendor/zendframework/zendframework/library';
 
putenv("ZF2_PATH=".$path);

chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
