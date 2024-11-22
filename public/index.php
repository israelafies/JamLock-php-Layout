<?php

require_once '../core/App.php';

use Core\App;

$app = new App();
$app->run();

use Core\Middleware\SecurityMiddleware;

$app = new App();
$app->useMiddleware(new SecurityMiddleware());
$app->run();
