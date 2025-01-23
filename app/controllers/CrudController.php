<?php 
namespace app\controllers;


use Flight;
use app\models\CrudModel;

class CrudController{
    public function __construct() {
    }
    public function AjoutHabitation() {
        $request = Flight::request();
        $idType = $request->query['idType'];
        $nbChambres = $request->query['nbChambres'];
        $loyer = $request->query['loyer'];
        $photo = $request->query['photo'];
        $quartier = $request->query['quartier'];
        $desc = $request->query['desc'];
        Flight::crudModel()->AjoutHabitation($idType,$nbChambres,$loyer,$photo,$quartier,$desc);
    }
    public function ListHabitation(){
        $donnes = Flight::crudModel()->ListHabitation();
        $data = ['page' => 'list','donnes' => $donnes];
        Flight::render('template',$data);
    }
    public function ModifierHabitation(){
        $request = Flight::request();
        $idType = $request->query['idType'];
        $nbChambres = $request->query['nbChambres'];
        $loyer = $request->query['loyer'];
        $photo = $request->query['photo'];
        $quartier = $request->query['quartier'];
        $desc = $request->query['desc'];
        Flight::crudModel()->ModifierHabitation($idType,$nbChambres,$loyer,$photo,$quartier,$desc);
    }
    public function DeleteHabitation(){
        $request = Flight::request();
        $idHabitation = $request->query['id'];
        Flight::crudModel()->DeleteHabitation($idHabitation);
    }
}
