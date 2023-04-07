<?php
include 'bdd.php';
class User {
    private $id_;
    private $nom_;
    private $plage_;
    private $color_;

    public function __construct($id, $nom, $plage, $color) {
        $this->id_ = $id;
        $this->nom_ = $nom;
        $this->plage_ = $plage;
        $this->color_ = $color;
    }

    public function CreateUser()
    {
        $requete = "INSERT INTO `user`(`nom`, `plage`, `color`) VALUES ('".$this->nom_."','".$this->plage_."','".$this->color_."')";
        $result = $GLOBALS["pdo"]->query($requete);
        if($result !== false && $result->rowCount() > 0) {
            $this->id_ = $GLOBALS["pdo"]->lastInsertId();
        }
    }
          
    public function getUserById($id){
        $requete = "SELECT * FROM `user` WHERE `id` = '".$id."'";
        $resultat = $GLOBALS["pdo"]->query($requete);
        if($tab = $resultat->fetch()){
            $this->id_ = $tab['id'];
            $this->nom_ = $tab['nom'];
            $this->plage_ = $tab['plage'];
            $this->color_ = $tab['color'];
            return $tab;
        }
        return null;
    }
}

?>