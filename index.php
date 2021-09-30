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

<?php
  
// Dépendances 

include 'Joueur.php'; 
include 'Partie.php'; 
include 'Set.php'; 

// Instantiation 

// 1. Class Joueur
$joueur1 = new Joueur('01', 'benchikh', 'messaouda'); 
$joueur2 = new Joueur('02', 'semikolennykh', 'zina'); 

// 2- Class Set
$set = new Set;
$pts_j1 = $set->nbr_pts_joueur1= rand(5,13);
$pts_j2 = $set->nbr_pts_joueur2= rand(5,13);
//$sets = $set->calculSet(); // appel de la fonction qui calcul le nombre de set
//Affichage 
echo "<p>".$joueur1->nom." : ".$pts_j1."</p>";
echo "<p>".$joueur2->nom. " : " .$pts_j2."</p>";
var_dump($set->calculSet($pts_j1, $pts_j2)) ;

?> 
  <div class="container" style="border: 1px solid grey">
  <p class="title">Calculateur de points tennis de table</p>
  <br>
  <form>
    <div class="form-row  justify-content-md-center">
      <div class="form-group col-sm-4">
        <label for="point">Vos Points</label>
        <input type="text" class="form-control form-control-lg" value= "<?php echo $pts_j1;?>">
      </div>

      <div class="form-group col-sm-4">
        <label for="pointadver">Points Adversaire</label>
        <input type="text" class="form-control form-control-lg" value="<?php echo $pts_j2;?>">
      </div>
     
    </div>
  </form>
</div>
</body>
</html>