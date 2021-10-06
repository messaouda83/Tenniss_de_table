<?php

class Set{

public $pointJ1 = 0;
public $pointJ2 = 0;

private $gagant;
private $est_fini =false;
private $partie;
private $numero;
public function __construct($partie, $numero){
    $this->partie = $this->partie;    // chaque set appartient à une partie 
    $this->numero = $this->numero;    // chaque set est numéroté de 1 à 7 
    $this->ajoutPoint($this->pointJ1, $this->pointJ2);

}
public function estFini():bool{
    return $this->est_fini; 
}

public function ajoutPoint(int $p1, int $p2){
    $this->pointJ1 = $this->pointJ1 + $p1; 
    $this->pointJ2 = $this->pointJ2 + $p2; 
    // Calcul l'écart 
$ecart = abs( $this->pointJ1 -  $this->pointJ2);
echo $ecart;
// Vérification condition pour avoir un set
if(($this->pointJ1 >= 11 || $this->pointJ2 >= 11 ) && ($this->ecart >= 2)){
   echo "set fini:"."<br>";
   echo "point jour1".$this->pointJ1."point joueur2".$this->pointJ2."<br>" ;
   $this->pointJ1 = 0;
   $this->pointJ2 = 0;
   $this->est_fini = true;

}
}
public function getGagnant()
{

if($this->estFini($this->pointJ1, $this->pointJ2)){
    if($this->this->pointJ1 > $this->this->pointJ2){
echo $this->this->pointJ1->nom()."gagnant";
    }else{
        echo $this->this->pointJ2->nom()."gagnant";
    }

}

}

}



