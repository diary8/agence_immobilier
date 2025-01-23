<?php 
namespace app\models;
use Flight;
use PDO;

class CrudModel 
{
    private $db;
    public function __construct($var) {
        $this->db = $var;
    }
    public function AjoutHabitation($idType,$nbChambres,$loyer,$photo,$quartier,$desc){
        $sql = "INSERT INTO habitation(idType,nbChambres,loyer,photo,quartier,desc) VALUES(:idType,:nbChambres,:loyer,:photo,:quartier,:desc)";
        $stt = $this->db->prepare($sql);
        $stt->execute([
            ':idType' => $idType,
            ':nbChambres' => $nbChambres,
            ':loyer' => $loyer,
            ':photo' => $photo,
            ':quartier' => $quartier,
            ':desc' => $desc
        ]);
    }
    public function ListHabitation(){
        $sql = "SELECT * FROM habitation";
        $stt = $this->db->prepare($sql);
        $stt->execute();
        return $stt->fetchAll();
    }
    public function ModifierHabitation($idHabitation,$idType,$nbChambres,$loyer,$photo,$quartier,$desc){
        $sql = "UPDATE habitation SET idType = :idType AND nbChambre = :nbChambres AND loyer = :loyer AND photo = :photo AND quartier = :quartier AND desc = :desc WHERE idHabitation = :idHabitation";
        $stt = $this->db->prepare($sql);
        $stt->execute([
            ':idHabitation' => $idHabitation,
            ':idType' => $idType,
            ':nbChambres' => $nbChambres,
            ':loyer' => $loyer,
            ':photo' => $photo,
            ':quartier' => $quartier,
            ':desc' => $desc
        ]);
    }
    public function DeleteHabitation($idHabitation){
        $sql = "DELETE FROM habitation WHERE idHabitation = :idHabitation";
        $stt = $this->db->prepare($sql);
        $stt->execute([
            'idHabitation' => $idHabitation
        ]);
    }
}
