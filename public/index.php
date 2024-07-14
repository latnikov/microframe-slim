<?php

// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function () {
    return 'Main Page';
});

$app->get('/about', function () {
    return 'About Page';
});

$app->run();
