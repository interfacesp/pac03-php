<?php

//On peut définir des constantes
define("RETOUR_LIGNE", "<br/>");
define("CAPACITE_MAX", 10);


echo "<h2>Structures conditionnelles</h2>"; 
echo "<ul>
         <li>if...else</li>
         <li>Opérateur Ternaire : (condition) ? [instruction-si-vrai] : [instruction-si-faux] </li>
         <li>Switch</li>
      </ul>";




/**
     * Structures conditionnelles
     * 
     * if - else 
     * 
     */

    
   
     $prixCrepe = 15; 
     $reference = 10;

     if($prixCrepe < $reference){
        echo "Le prix de la crêpe est inférieur à ".$reference;
     }else {
        echo "Le prix de la crêpe est supérieur ou égal à ". $reference;
     }

     /**
      * Si une personne   18 ans ou plus, on affiche: "vous êtes majeur" 
      *  
      */
      echo "<h4>Test âge</h4>"; 
      $age = 19; 
      if($age >= 18){
         echo "Vous êtes majeur"; 
      } else {
         echo "Vous êtes mineur"; 
      }

      /**
       * Dans un parc d'attraction, il faut mesurer au moins 150cm 
       * ou avoir au moins 10ans pour avoir accès le train fantôme 
       */
     
       $age= 9;
       $taille= 100;

       if( $age >= 10 || $taille >= 150){
          echo "<p> Bienvenue dans le train fantôme</p>";
       } else { // age est inférieur à 10 Et taille inférieure à 150
          echo "<p>A dans quelques années </p>";
       }

       /**
        * Changement de règle dans parc d'attraction
        * Condition 1 : avoir au moins 10 ans (10 ans ou plus)
        * Condition 2: avoir au moins 150cm (150 cm ou plus)
        * Les deux conditions doivent 
        */
      
        $age = 10; 
        $taille = 110; 

        if($age >= 10 && $taille >= 150){
           echo "<p> Vous pouvez rentrer dans le train</p>";
        }else { //soit  age < 10 ou $taille < 150 
           echo "<p>Désolé, revenez une autre fois</p>";
        }

        /**
        * Changement de règle dans parc d'attraction
        * Condition 1 : avoir au moins 10 ans (10 ans ou plus) et être accompagné par un parent
        *        ou 
        * Condition 2: avoir au moins 150cm (150 cm ou plus)
        * Les deux conditions doivent 
        */

        $age= 10; 
        $taille = 149; 
        $etreAccompagne = false;

        if(($age >=10 && $etreAccompagne) || $taille >= 150 ){
            // on au moins 10 ans et accompagné ou mesure au moins 150cm
            echo "<p>Vous pouvez rentrer</p>";
        
         }else {
            echo "<p>Désolé, pas possible </p>";
        }

     /**
      * Opérateur ternaire: (condition) ? [instruction si vrai] : [instruction si faux]
      */


     $prixCrepe = 10; 
   
     //Exemple avec des chaînes de caractères
     //Notation 1
     $result = ($prixCrepe < 10)? "prix Inférieur à 10": "prix supérieur ou égal à 10";

     //Notation 2
     if($prixCrepe < 10){
        $result = "prix Inférieur à 10";
     }else {
        $result = "prix supérieur ou égal à 10";
     }

     //Notation 1 et 2 équivalentes 
     
     //Exemple avec des nombres
     $variableNumerique= ($prixCrepe < 10)? $prixCrepe + 2 : $prixCrepe; 

     echo "Structure Ternaire-résulat avec chaînes :". $result;
     echo "Structure Ternaire-résulat avec nombre :". $variableNumerique;


     echo RETOUR_LIGNE;

     /**
      * Switch 
      */

      $scoreResto= 5; 
      $final; 

      switch($scoreResto){
         case 0: $final= "Vos crêpes ne sont pas bonnes du tout!"; 
                  // break; 

         case 1: $final= "Bof";
                  // break;
         case 2: $final= "Mmmh...peut mieux faire";
                  // break; 
         case 3: $final= "Pas mal du tout";
                  break; 

         case 4: $final=  "Bon ";
                  break; 

         case 5: $final= "C'est super !";
                  break; 
         default: $final= "Aucun avis"; 
      }
      
      echo "Resultat Score: ". $final.RETOUR_LIGNE; 


?> 