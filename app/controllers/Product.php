<?php
namespace app\controllers;
use app\models\ProductModels;
use Flight;
 class Product {
    public function list()  {
    $product = ProductModels::getProduit();
      $data = ['nom' => $product['nom'],'prix' => $product['prix']];  
      Flight::render('Products',$data);  
    }
}
    

?>