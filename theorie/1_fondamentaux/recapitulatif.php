<?php

// initialisation sans donner de valeur
// serait utilisé plus tard 
$poidsTotal = NULL; 
$poidsCartonSalon = 22; 
$cartonLourd = false; 
$demenagementEnCours= true; 

if($poidsCartonSalon > 10) {
    echo "Ce carton va dans le camion <br/>";
    echo "Attention, il est lourd";
    $cartonLourd = true; 
    $poidsTotal = $poidsCartonSalon; 
}    
else {
    echo "Ce carton va dans la voiture <br/>";
    echo "Il n'est pas lourd";
}




if($poidsCartonSalon > 10 && $demenagementEnCours) {
    echo "Déménagement en cours et ce carton va dans le camion";
}

echo "<h4>Switch</h4>";

/**
 * Switch 
 */

$categorie = NULL; //possibilités: 1,2,3 ou autre

if($poidsCartonSalon < 10){
    $categorie = 1;
}elseif ($poidsCartonSalon >= 10 && $poidsCartonSalon <= 20){
    $categorie = 2; 
}else {
    $categorie = 3; 
}

switch($categorie){
    case 1: echo "C'est léger";
            break;
    case 2: echo "C'est lourd"; 
            break;
    case 3: echo "C'est très lourd"; 
            break; 
    default: echo "Categorie inconnue"; 

}




?>
