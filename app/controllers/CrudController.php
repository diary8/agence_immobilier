<?php 
namespace app\controllers;


use Flight;
use app\models\CrudModel;

class CrudController{
    public function __construct() {
    }
    public function AjoutHabitation() {
        $request = Flight::request();
        $idType = $request->query('idType');

    }
}
?>