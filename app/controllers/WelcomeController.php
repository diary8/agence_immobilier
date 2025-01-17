<?php

namespace app\controllers;

use Flight;

class WelcomeController {

	public function __construct() {

	}


	public function home() {
        $data = ['message' => 'Jean','zavatra' => 1];
        Flight::render('welcome', $data);
    }
}