
<?php 

//class set

class Set
{
   public int $nbr_pts_joueur1;
   public int $nbr_pts_joueur2;
   public int $ecart;
   public int $nbr_sets_j1=0;
   public int $nbr_sets_j2=0;
  
   public int $i;


  public function calculSet()

  {

  $this->nbr_pts_joueur1 ;
  $this->nbr_pts_joueur2 ;
   $ecart = abs($this->nbr_pts_joueur1 - $this->nbr_pts_joueur2); 
  // echo "<br>ecart : ".$ecart;
   if($ecart >= 2 AND ($this->nbr_pts_joueur1 >=11 || $this->nbr_pts_joueur2 >=11) )
    {
      //echo "je suis la";
    for($i =0; $i <= 3; $i++ ) 
     {
        //echo "ici aussi";
         if($this->nbr_pts_joueur1 > $this->nbr_pts_joueur2)
          {
           $this->nbr_sets_j1 = $this->nbr_sets_j1 + 1;
           //return $this->nbr_sets_j1 ;casser la boucle
          }
           else
          {
           $this->nbr_sets_j2 = $this->nbr_sets_j2 + 1;
         
          }
      }
      return array($this->nbr_sets_j1 , $this->nbr_sets_j2 );
    }  
  }    
 }
  





