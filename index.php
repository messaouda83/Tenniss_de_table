<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<title>Compeur point tennis de table</title>
    
</head>
<body>
<div class="container" style="border: 1px solid grey">
  <p class="title">Calculateur de points tennis de table</p>
  <br>
  <form>
    <div class="form-row  justify-content-md-center">
      <div class="form-group col-sm-4">
        <label for="point">Vos Points</label>
        
        <input type="text" class="form-control form-control-lg" value= "<?php  ?>">
        <button class="btn btn-primary mt-3 " type="submit">+</button>
     
      </div>

      <div class="form-group col-sm-4">
        <label for="pointadver">Points Adversaire</label>
        <input type="text" class="form-control form-control-lg" value="<?php  ?>">
        <button class="btn btn-primary mt-3 text-center" type="submit">+</button>
      </div>
     
    </div>
  </form>
</div> 
<?php 
// Dépendances 

include 'Joueur.php'; 
include 'Partie.php'; 
include 'Set.php'; 

function addPoint($partie){
  $num = rand(0,1);// Numero de joueur
  if($num == 0){
    $partie->getSetCourant()->ajoutPoint(1,0);
  }else {

    $partie->getSetCourant()->ajoutPoint(0,1);
  }
}

// Instantiation 

$joueur1 = new Joueur('01', 'benchikh', 'messaouda'); 
$joueur2 = new Joueur('02', 'semikolennykh', 'zina'); 
$partie= new Partie( $joueur1, $joueur2, 3);
$set =new Set;
/* 
var_dump($partie->getSetCourant());
echo "<br>";*/
  
$partie->createSet() ; 

//echo "<br>";
//var_dump($partie->getSetCourant());

echo "<h1>Set numero : ".count($partie->getSets())."</h1>";
echo "<br>"; 

for ($i=0; $i <1000; $i++) { 

  addPoint($partie);
  if($partie->getSetCourant()->estFini())
  {
 
    if($partie->getSetCourant()->pointJ1 > $partie->getSetCourant()->pointJ2)
    {
      $set->nb_setj1 = $set->nb_setj1 + 1 ;
      echo "Nombre de set joueur1 : ".$set->nb_setj1."<br>"."joueur1 a gagné";
      if($set->nb_setj1 == 3){
        echo "<br>"."Partie fini";
        $set->nb_setj1 = 0;
        return ;//pour arrêter la boucle
      }
       
    }
    else{
      $set->nb_setj2 = $set->nb_setj2 + 1 ;
      echo "Nombre de set joueur2 : ".$set->nb_setj2."<br>"."joueur2 a gagné";
      if($set->nb_setj2 == 3){
        echo "<br>"."Partie fini";
      $set->nb_setj2 = 0;
        return;//Pour arrêter la
      }
      
    }
    
    
  

   //var_dump($partie->getSetCourant());
   $partie->createSet();
    
    echo "<h1>Set numero : ".count($partie->getSets())."</h1>";
  }
}

echo "<br> getSets<br>";
if ($partie->estFini()) 
            {
                echo "sets: "."<br>";
                $partie->createSet();
            }
//var_dump($partie->getSets());

// die();bloc qui le suit s'exécute pas
?> 
  
</body>
</html>