
<?php 

//class set

class Set
{
   public int $nbr_pts_joueur1 ;
   public int $nbr_pts_joueur2 ;
   public int $ecart;
   public int $nbr_sets_j1=0;
   public int $nbr_sets_j2=0;
  
   public int $i;


  public function calculSet($pts_j1, $pts_j2)

  {

 
   $ecart = abs($pts_j1 - $pts_j2); 
  // echo "<br>ecart : ".$ecart;
   if($ecart >= 2 AND ($pts_j1 >=11 || $pts_j2 >=11) )
    {
      //echo "je suis la";
    for($i =0; $i <= 3; $i++ ) 
     {
        //echo "ici aussi";
         if($pts_j1 > $pts_j2)
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
  





