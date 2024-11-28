<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

use App\Lib\Database;

Database::init([
    'host' => 'localhost',
    'dbname' => 'articles_site',
    'user' => 'root',
    'password' => '',
]);
