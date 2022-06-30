<?php

 /**
  * Instruction de base. 
  * L'instruction suivante affiche un texte "Bonjour". 

  * Toute instruction doit se terminer par un point-virgule
  */

  echo "Bonjour"; 


 //Ceci est un commentaire sur une ligne

 /**
  * Ceci est un commentaire sur plusieurs 
  * lignes. 
  * Tout ce qui est écrit en commentaire, n'est pas traité par
  * le moteur d'exécution du langage PHP
  */




/**
 * Affichage du texte "Variables et Types" entouré de balises HTML
 */

echo "<h2>Variables et Types </h2>"; 


/**
   * Types de données de base : chaînes de caractères, nombres, valeurs booléenes,
   */

   $uneChaineDeCarac= "texte"; 
   $unNombre= 12; 
   $uneValeurBoolVrai= true;
   $uneValeurBoolFaux= false; 
   $uneValeurNull = NULL; //variable déclarée mais pas encore de valeur. 

/**
 * Déclaraction d'une variable 
 * 
 * Déclaration d'une variable ne fait que réserver un espace mémoire pour cet variable. 
 * En terme d'affichage, il n'y aura rien à afficher. 
 * 
 * 
 */
 $nom = 'Gahungere';
 $nomBis= "Gahungere";
 $unNom_Tres_Long_VraimentTres_Long = "Bachibouzouzouzouz";  
 $nombreEntier = 10; 
 $nombreEntierNegatif = -10; 
 $nombreDecimal = 10.20; 
 $isCool= false; 
 $isAlmostWeekend= true; 
 $unNombreEnTexte= "10";  // c'est du texte
 $unNombre= 10; //c'est un nombre

 echo $unNom_Tres_Long_VraimentTres_Long ;
 


 /** 
  * Concaténation : Fusion 
  * Opérateur de concaténation: . (un point)
  * 
  * Combinaisons possibles: 
  *  1. chaîne de caractères avec chaîne de caractère
  *  2. chaîne de carcatères avec nombre 

  * Une des deux chaînes de caractères peut être dans une variable 
  */

  echo "<h3>Chaines de caractères</h3>";

   echo 'Mon nom est'. $unNom_Tres_Long_VraimentTres_Long. " <br />"; 
  
 /**
  * Opérations arithmétiques 
  */

  echo "<h3>Opérateurs Arithmétiques </h3>";

   $retourLigne= "<br/>";
   $total = 10 + 12; 
   $soustraction = 10 - 2; 
  

   echo "10 + 12 = ". $total. $retourLigne;  

   echo "10 - 2 = ". $soustraction . $retourLigne;  

   echo 'simple guillements: les variables ne sont pas évaluées - exemple avec $total '; 

   echo $retourLigne; 

   echo "double guillements: les variables sont remplacées par leurs valeurs - exemple avec $total";


   /**
    * Retour à la ligne
    */
    echo "<h3>Retour à la ligne</h3>"; 
    
    echo "Retour à la ligne en HTML <br/>";

    echo "Retour à la ligne en ligne de commande - qui ne marche pas sur une page Web \n";

    echo "Autre ligne";

    /**
     * Retour à la ligne avec <p> </p>
     */

    $prixChemise = 10;
    $prixChaussure = 15; 

    echo "<p>Prix de la chemise équivaut à ". $prixChemise. "</p>" ;
    
    //autre façon de faire pour illustrer la fusion (concaténation)
    echo "<p>". "Prix de la chemise équivaut à ". $prixChemise. "</p>"; 


?>
