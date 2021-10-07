<?php

class Set
{

    public $pointJ1 = 0;
    public $pointJ2 = 0;
    public $nb_setj1 = 0;
    public $nb_setj2 = 0;
    private $gagant;
    private $est_fini =false;


            public function estFini():bool
            {
                return $this->est_fini; 
            }

            public function ajoutPoint(int $p1, int $p2)
            {
                    $this->pointJ1 = $this->pointJ1 + $p1; 
                    $this->pointJ2 = $this->pointJ2 + $p2;

                    // Calcul l'écart 
                    $ecart = abs( $this->pointJ1 -  $this->pointJ2);
                    //echo $ecart;

                    // Vérification condition pour avoir un set
                    if(($this->pointJ1 >= 11 || $this->pointJ2 >= 11 ) && ($ecart >= 2)){
                    //    echo "set fini:"."<br>";
                    echo "point jour1 : ".$this->pointJ1."<br>point joueur2 : ".$this->pointJ2."<br>" ;

                    $this->est_fini = true;
                    }
            }
           /*  public function getGagnant()
            {
                    if($this->estFini())
                    {

                        if($this->pointJ1 > $this->pointJ2)
                        {
                            echo "je suis là";
                            $this->nb_setj1 = $this->nb_setj1 + 1 ;
                            //echo $this->pointJ1->getNom()."gagnant";
                           
                        }
                        else
                        {
                            $this->nb_setj2 = $this->nb_setj2 + 1; 
                          
                           // echo $this->pointJ2->getNom()."gagnant";
                        }
             }      } */

}



