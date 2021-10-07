<?php
// La class Partie
class Partie 
{
    
    private $set_courant = 0 ;
    private $est_fini = false; 
    private $sets = [];//suivi de set
    private $nb_sets =3;
     /** 
     * @param Joueur $j1      Joueur numéro 1 
     * @param Joueur $j2      Joueur numéro 2 
     * @param int    $nb_sets nombre de sets à jouer : 3 
     */ 
    public function __construct(Joueur $joueur1, Joueur $joueur2, $nb_sets){

        $this->joueur1 = $joueur1;
        $this->joueur2 = $joueur2;
        
    }

    /** 
     * @return Joueur 
     */ 
    public function getJoueur1(): Joueur 
    { 
        return $this->joueur1; 
    } 
  
    /** 
     * @return Joueur 
     */ 
    public function getJoueur2(): Joueur 
    { 
        return $this->joueur2; 
    } 
  
    /** 
     * @return bool 
     */ 
    public function estFini() :bool
    { if($this->nb_sets == 3){
        $this->est_fini = true;
    }
        return $this->est_fini; 
    } 

    public function createSet() 
    { 
        $this->sets[] = new Set();// Ajouter un set 
          
    } 
    public function getSetCourant(): false|Set //Renvoi false ou un set 
    {

        return end($this->sets);
    }

    public function getSets(): array  //Renvoi un tableau 
    {
        return $this->sets;
    }
   
}
 
  


