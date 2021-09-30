<?php

/* Class joueur */
class Joueur {

    private $id;
    public $nom;
    private $prenom;

    public function __construct($id, string $nom, string $prenom){
      $this->id= $id;
      $this->nom= $nom;
      $this->prenom=$prenom;

    }

    public function id() 
    { 
        return $this->id; 
    } 
    public function nom(): string
    {
        return $this->nom;
    }


    public function prenom() : string  
    { 
        return $this->prenom; 
    } 
}
?>

