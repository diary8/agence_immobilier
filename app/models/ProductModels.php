<?php 
namespace app\models;
use Flight;

class ProductModels{
    public static function getProduit(){
        $produits = ['nom' => ['coca','bonbon','sprite','afd','dav','fsgs','svvd','dfasdfas']
        ,'prix' => ['100','100','100','100','100','100','100','100']];
        return $produits;
    }
}
?>