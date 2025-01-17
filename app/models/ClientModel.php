<?php 
namespace app\models;
use Flight;
use PDO;

class ClientModel {
    public function inscriptionClient($nom,$mdp,$email,$num )
    {
        $query = $this->db->prepare("INSERT INTO client(nom,mdp,email,num) VALUES (?,?,?,?)");
        $query->bindValue(1, $nom);
        $query->bindValue(2, $mdp);
        $query->bindValue(3, $email);
        $query->bindValue(4, $num);
        $query->execute();
        if ($query->rowCount() > 0) return true;
        return false;
    }

    public function connectionClient($nom,$mdp){
        $sql = "SELECT * FROM client WHERE nom = :nom AND mdp=:mdp";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nom', $nom);
        $stmt->bindValue(':mdp', $mdp);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return true;
        }
        return false;
    }
}
