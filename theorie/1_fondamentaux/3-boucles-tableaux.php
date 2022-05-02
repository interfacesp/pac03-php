<?php

define ("END_LINE", "<br />");

/**
 * 1er type de boucle: While 
 */
echo "<p>Boucle while </p>";
$counter= 1;

while ($counter <= 10 ) {
        echo "<p>C'est bon, les crêpes! $counter</p>"; 
        //instruction 2 
        //instruction 3
        //... 

        $counter++;// $counter = $counter +1 ;
}

// $valeurPiece = lancer la pièce
$valeurPiece = "face"; 
while ($valeurPiece == "pile") {
        // exécuter instruction 1
        // exécuter instruction 2
        // $valeurPiece = // lancer la pièce; 
}

// $minimum = 20
// $temperature= mesureTemperature 
$temperature = 20;
$minimum = 20; 
while ($temperature < $minimum ) {
        //activer chauffage
        //...
        //$temperature = mesureTemperature 
        
}



$index=1;
while ($index <= 10){
        echo "Index numéro". $index; 
        $index++;
}


/**
 * 2ème type de boucle: For
 */

echo "<h4> Boucle For </h4>"; 
for ($counter = 1; $counter <= 10; $counter++){
        echo "<p> C'est bon, les crêpes! $counter </p> "; 
        //instruction 2 
        //instruction 3
        // instruction 4
        //...
}


/**
 * Les Tableaux
 * 
 * Un tableau est une structure de données (variables) permettant de stocker une collection de valeurs.
 * Ces valeurs peuvent être de type différent (texte, nombre, etc).
 * 
 * En PHP, il existe 2 types de tableaux : tableau numérotés et tableaux associatifs
 */


 /**
  * Tableau numérotés à 1 dimension  
  */

$unTableau = ['1', '2', '3', 10, -2];

//Ajout d'un élement 
$unTableau[] = 12; // on ajoute le nombre 12 à la fin du tableau
$unTableau[] = 13;  // on ajoute le nombre 13 à la fin du tableau
$unTableau[0] = 15; // on remplace l'élément, qui est à la position 0, par 15


// On les appelle tableau numéroté car numérotés avec des indices. 
// Les indices d'un tableau commencent toujours à 0 (zéro)

//Affiche le 1 élément 
echo $unTableau[0].END_LINE;

//Affiche le 3ème élément - 
echo $unTableau[2];

// Parcours de tableau avec boucle
/**
 * Boucle For 
 * Boucle Foreach 
 * Fonction spéciale déboggage : print_r
 
 */

 $i=1; 
 $i++; //$i = $i + 1;
 $taille= count($unTableau);

 for($indexParcours= 0; $indexParcours < $taille ; $indexParcours++){
         echo $unTableau[$indexParcours].END_LINE;
         echo "Itération numéro ".$indexParcours. END_LINE;

 }

 /**
  * Déclaration et manipulation d'un tableau sous forme de constante
  */

define("CREPES", ["mikado", "chocolat"]); 
echo "taille  tableau CREPES ". count(CREPES); 

for ($i=0; $i < 2 ; $i++) { 
        # code...
       echo CREPES[$i]; 
}


/**
 * Equivalence des notations. 
 * Les 3 notations suivantes sont sémantiquement équivalentes:
 * Elles produisent le même résulat 
 * 
 * $pos++
 * $pos = $pos + 1;
 * $pos+= 1;
 * 
*/


 

/**
 * 3me type de boucle: Foreach
 * 
 */
//boucle foreach permet de parcourir un tableau en commençant par le début.
//foreach permet de ne pas se préocupper des indices
echo "<h4>Boucle foreach</h4>";  
foreach ($unTableau as $elem) {
         echo $elem."<br/>";
 }


 /**
  * Affichage contenu d'un tableau à l'aide de la fonction: print_r
  */
 
 //Fonction spéciale déboggage 
 echo '<pre>'; //balises permettant une lecture confortable à l'écran
        print_r($unTableau); //print_r => affiche le contenu d'un tableau avec ses indices
 echo '</pre>';

/**
 * Affichage de code HTML plus jolie
 */

$crepes= ['Sarrasin', "Mikado", "Fraises"];
$nombreCrepes= count($crepes);
$titre = "<h1>Liste des crêpes</h1>"; 
$sousTitre= "<h2>Mes préférences</h2>";

$liste= "<ul>";
for($indexParcours= 0; $indexParcours < $nombreCrepes ; $indexParcours++){
        $liste.= "<li>".$crepes[$indexParcours]."</li>";
}

$liste.= "</ul>";

echo $titre;
echo $sousTitre;
echo $liste;


/**
 * Tableaux numérotés à plusieurs dimensions!
 */

$unTableauDeChaines= ['Un', "Deux", "Trois"];

/**
 * Tableau numéroté à 2 dimensions:  
 */
$unTableauDeTableaux = [ //tableau mère 
                                ['Petit Tonnerre', 'Yakari'], // 1er élément tableau mère: aussi un tableau
                                ['Tintin', 'Milou'] //2ème élément tableau mère: qui est aussi un tableau 
                        ]; 


/**
 * 2ème type tableau: 
 * 
 * Tableaux associatif. 
 * 
 * 
 */

$ficheIdentite= [
        'nom' => 'Gahungere',
        'prenom' => 'Espoir',
        'age' => 18,
        'typeDeMusiquePref' => ['Rap', 'hip-hop','classique']
];

//Affiche Gahungere
echo $ficheIdentite['nom']. "<br/>"; 

//Affiche 18
echo $ficheIdentite['age']. "<br/>";

// Ajout d'une nouvelle clé et valeur
$ficheIdentite['hobby'] = "danse";
echo "Après ajout nouvelle clé 'hobby' : ". $ficheIdentite['hobby']. "<br/>"; 

  $menu = [
                ['nom' => 'sarrasin',
                 'prix' => 10, 
                 'vegan' => false,
                 'glutenFree' => false       
                ],

                ['nom' => 'mikado',
                 'prix' => 15, 
                 'vegan' => true,
                 'glutenFree' => false       
                ]

          ];

echo '<pre>';
print_r($menu);
echo '</pre>';


//Afficher prix de la crêpe sarrasin 
echo $menu[0]['prix']; //affiche 10
$menu[0]['prix'] = 100; 
echo $menu[0]['prix']; // affiche 100

?>