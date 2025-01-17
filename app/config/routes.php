<?php

use app\controllers\Product;
use app\controllers\ApiExampleController;
use app\controllers\WelcomeController;
use flight\Engine;
use flight\net\Router;
// use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */
/*$router->get('/', function() use ($app) {
	$Welcome_Controller = new WelcomeController($app);
	$app->render('welcome', [ 'message' => 'It works!!' ]);
});*/

// $Welcome_Controller = new WelcomeController();
// $router->get('/home', [ $Welcome_Controller, 'home' ]); 

//$router->get('/', [ 'WelcomeController', 'home' ]); 

//$router->get('/', \app\controllers\WelcomeController::class.'->home'); 

$router->get('/hello-world/@name', function($name) {
	echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
});
