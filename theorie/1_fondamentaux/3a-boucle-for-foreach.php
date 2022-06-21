<?php

$joursSemaine= [
                "Lundi", 
                "Mardi", 
                "Mercredi", 
                "Jeudi",
                "Vendredi",
                "Samedi",
                "Dimanche"
            ];


// Sans boucle, ce serait ennuyant et long
 $joursSemaine[0];
 $joursSemaine[1];
 $joursSemaine[2]; 
 $joursSemaine[3];
 $joursSemaine[4];
 $joursSemaine[5];
 $joursSemaine[6];  
 $joursSemaine [] = "Huitième jour"; 
 
// unset($joursSemaine[2]); 

echo "<h4>For</h4>";
 
 //Solution : boucle for+
$totalJours = count($joursSemaine);
for ($index=0; $index < $totalJours; $index++) { 
    echo $joursSemaine[$index]; 
}

echo "<h4>Foreach</h4>";

foreach($joursSemaine as $jour) {
    echo $jour; 
}

$ficheId = [
    "nom" => "Gahungere",
    "prenom" => "Espoir",
    "profession" => "formateur" 
]; 

foreach ($ficheId as $cle => $valeur) {
    echo "la cle <em>$cle</em> a comme valeur : <strong>$valeur</strong>  <br>"; 
}  

?>