<?php

/* Class joueur */
class Joueur {

    private $id;
    public $nom;
    private $prenom;

    public function __construct($id, string $nom, string $prenom){
      $this->id = $id;
      $this->nom = $nom;
      $this->prenom =$prenom;

    }

    public function getId() 
    { 
        return $this->id; 
    } 
    public function getNom(): string
    {
        return $this->nom;
    }


    public function getPrenom() : string  
    { 
        return $this->prenom; 
    } 
}
?>

