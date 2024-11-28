<?php
require_once __DIR__ . '/app/bootstrap.php';

use App\Controllers\MainController;

$controller = new MainController();
$controller->handleRequest();
