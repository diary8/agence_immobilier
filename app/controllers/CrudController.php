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
        $nbChambres = $request->query('nbChambres');
        $loyer = $request->query('loyer');
        $photo = $request->query('photo');
        $quartier = $request->query('quartier');
        $desc = $request->query('desc');
        Flight::CrudModel()->AjoutHabitation($idType,$nbChambres,$loyer,$photo,$quartier,$desc);
        
    }
}
