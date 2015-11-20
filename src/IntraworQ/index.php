<?php

require __DIR__ . '/../../vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Hello, Azure";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();
