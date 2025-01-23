<?php

use app\controllers\CrudController;
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
$router->get('/',function (){
	Flight::render('template',['page' => 'acceuil']);
});
$router->group('/list',function () use ($router,$app) {
	$crudController = new CrudController($app);
	$router->get('/habitat',[$crudController,'ListHabitation']);
});
