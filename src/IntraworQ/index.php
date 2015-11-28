<?php

require __DIR__ . '/../../vendor/autoload.php';

$app = new \Slim\Slim([
		'mode' => 'development',
		'debug' => true,
		'view' => new \Slim\Views\Twig(),
		'templates.path' => __DIR__ . '/Views'
	]);

$view = $app->view();

$view->parserOptions = [
		'debug' => true,
		'cache' => __DIR__ . '/../../cache'
	];

$view->parserExtensions = [
		new \Slim\Views\TwigExtension()
	];

$app->get('/', function () use($app) {
	$app->render('index.html', ['location' => 'Azure', 'modules' => get_loaded_extensions()]);
});

$app->get('/hello/:name', function ($name) {
	echo "Hello, $name";
});

$app->get('/info', function() {
	echo phpinfo();
});

$app->run();
