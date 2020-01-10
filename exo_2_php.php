<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
  
   $hello="<div>hello</div>";
   $nom_de_personne="<div>john</div>";
   $world="<div>world</div>";
   $age=28;
   echo gettype($hello); 
   echo gettype($age);
   echo$hello;
   echo$nom_de_personne;
   echo$world;
  
  ?>
  <?php
  $hello="hello";
  $world=", world!";
  echo$hello.$world;
  $result=$hello.$world;
  echo "<div>$result</div>";
  ?>
  <!--les variables numeriques-->
  <?php
  $montantHt=50.445;
  echo gettype($montantHt);
  echo "<div>$montantHt</div>";
  $tva= $montantHt*(20/100);
  echo "la valeur avec un taux de 20% est de ".$tva."euros <br>";
  ?>
  <!--les tableaux-->
  <?php
$tab = array(15,22);
$tabCrochets = [15,22];
var_dump($tab);
var_dump($tabCrochets);
$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$array["dimanche"]=$var;
?>
</body>
</html>