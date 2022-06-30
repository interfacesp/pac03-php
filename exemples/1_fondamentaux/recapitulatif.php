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



echo "<h4>Récap 19/05</h4>"; 

$ageSuzie= 28; 
$nom2 = "Suzie"; 

echo " $nom2 a $ageSuzie ans"; 
echo '$nom2 a $ageSuzie ans '; 

var_dump($ageSuzie);
var_dump($nom2);

$passions = ["sport", "cuisine", "mots-croisés", "cinéma"]; 

print_r($passions);

unset($passions[0]);

print_r($passions);


echo "<h4>Foreach</h4>";

foreach ($passions as $maPassion){
    echo "$maPassion <br/>";
}



?>
