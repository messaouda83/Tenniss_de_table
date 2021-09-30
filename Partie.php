<?php
// La class Partie
class Partie {

    private $nbr_sets;//Le nombre de set.

  /** 
     * @var Joueur 
     */ 
    private $joueur1;
     /** 
     * @var Joueur 
     */ 
    private $joueur2;
     /** 
     * @var Joueur 
     */ 
    private $gagnant; 
    public function __construct(joueur1 $j1, joueur2 $j2, int $nbr_sets ){

        $this->joueur1= $j1;
        $this->joueur2= $j2;
        if($nbr_sets===3)
        {
           $this->nbr_sets= $nbr_sets;
        }
        else {
            $this->nbr_sets= 3;
        }
        $this->startNewSet();
    } 

    /** 
     * @return Joueur 
     */ 
    public function joueur1(): joueur{
        return $this->joueur1;
    }
  /** 
     * @return Joueur 
     */ 
    public function joueur2(): Joueur 
    { 
        return $this->joueur2; 
    } 
public function startNouveauSet():void{

    
}
}