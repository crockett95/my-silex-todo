<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app['debug'] = true;

$app->register(new TwigServiceProvider(),
	['twig.path' => dirname(dirname(__FILE__)) . '/views']);

$app->get('/', function () use ($app) {
	return $app['twig']->render('index.twig');
});

$app->get('/hello/{name}', function ($name) use ($app) {
	return $app['twig']->render('hello.twig', ['name' => $app->escape($name)]);
});

return $app;