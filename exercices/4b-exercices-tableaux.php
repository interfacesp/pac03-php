<?php

  echo "<h3>Exercices - Tableaux numérotés et tableaux associatifs</h3>";

 /**
  *  
  * 
  *  Soit un tableau de crêpes
  *  Afficher 1 crêpe sur 2. 
  *  Exemple: 
  *        ['sarrasin', 'patate', 'amandes', 'chocolat', 'pistache']

  * Affichage : sarrasin, amandes, pistache
  * Affichage à l'envers: pistache, chocolat, amandes, patate,sarrasin
  */

  echo "<h4>Tableau numéroté - Affichage 1 crepe sur 2 </h4>";

  $carte = ['sarrasin', 'patate', 'amandes','chocolat', 'pistache'];
  
  for($index = 0; $index < count($carte); $index+=2) {
      echo $carte[$index]. " <br/>"; 
  }


  echo "<h5> Tableau numéroté - Affichage tableau à l'envers</h5>"; 

  for($y = count($carte)-1 ; $y >= 0 ; $y= $y-1 ){
      echo $carte[$y] . "<br/>"; 
  }
  


  /**
   * 
   * Créer un tableau avec une liste de noms de crêpes et leur prix. 
  * Ensuite, parcourez ce tableau en affichant le contenu
  * Indice : Tableau de tableaux 
  *
  *  
  *  Exemple: 
   * $menu=   [
   *                ['sarrasin', 10],
   *                ['mikado', 12]
   *               ['chocolat', 15]
   * 
   *          ]
   *   
   * // Exemple avec boucle : 
   *    for (...) {
   *          ... $menu[$index][0] ... $menu[$index][1]
   *      }
   * 
   * 
   */

   echo "<h4>Tableaux numérotés dans un tableau numéroté </h4>";

   $menu = [
              ['sarrasin', 10], 
              ['mikado', 12], 
              ['chocolat', 15]
           ];
   

    for($z_index = 0; $z_index < count($menu); $z_index++ ){
        echo "<p>". $menu[$z_index][0]. " ...........". $menu[$z_index][1]."</p>";  
    }

   /**
    *  Tableaux associatifs 
    *    
    *    Créer un menu avec 3 ou 4 crêpes, en utilisant un tableau associatif
    *    ayant comme clés/propriétes:
    *    - nom, prix, vegan (true/false), glutenFree(true/false)
    *     
    *    
    *   1. Afficher Un Menu dans le style: 

    *       Sarrasin...... 10 EUR (Vegan, Sans gluten)
    *
    *   2. Afficher uniquement des crêpes Vegan dont le prix est supérieur à 10 EUR
    * 
    */

    $menuAssoc = [
              [ 
                "nom" => "sarrasin", 
                "prix"=> 10, 
                "vegan" => true, //vegan: oui
                "glutenFree" => true // sans gluten: oui
              ],

              [ 
                "nom" => "mikado", 
                "prix"=> 12, 
                "vegan" => false, //vegan : non
                "glutenFree" => true // sans gluten: oui
              ],

              [ 
                "nom" => "chocolat", 
                "prix"=> 15, 
                "vegan" => true, //vegan : oui
                "glutenFree" => false // sans gluten: non => donc avec gluten
              ]
          ];
  
  
   /**
    * 1. Affichage du Menu
    *  */  
  
    echo "<h5>Affichage Menu - Tableaux associatifs dans Tableau numéroté </h5>";
  
    for($p_index = 0; $p_index < count($menu); $p_index++ ){

        echo "<p>";

          //4 cas de figure
          //1 seule instruction "echo" exécutée, selon le case de figure

        if($menuAssoc[$p_index]["vegan"] && $menuAssoc[$p_index]["glutenFree"]){
          // Cas 1: Crepe Vegan et Sans Gluten

          echo $menuAssoc[$p_index]["nom"]. ".....". $menuAssoc[$p_index]["prix"]. " (Vegan, Sans Gluten)"; 

        }elseif (!$menuAssoc[$p_index]["vegan"] && $menuAssoc[$p_index]["glutenFree"]) {
          //Cas 2: Crêpe Pas Vegan et Sans Gluten
          echo $menuAssoc[$p_index]["nom"]. ".....". $menuAssoc[$p_index]["prix"]. " (Sans Gluten)"; 
       
        }elseif($menuAssoc[$p_index]["vegan"] && !$menuAssoc[$p_index]["glutenFree"]) {
       
          //Cas 3: Crêpe Vegan et Pas Gluten Free =>Avec Gluten
          echo $menuAssoc[$p_index]["nom"]. ".....". $menuAssoc[$p_index]["prix"]. "(Vegan)"; 
       
        } else {
        
          //Cas 4 et dernier cas: Crêpe pas Vegan et Pas GlutenFree 
          echo $menuAssoc[$p_index]["nom"]. ".....". $menuAssoc[$p_index]["prix"]; 
        }


        echo "</p>";

  }
   
   
   


/**
 * 2. Affichage des crêpes Vegan dont le prix est supérieur à 10 EUR
 */

 echo "<h5>Affichage crêpes Vegan dont le prix est supérieur à 10 EUR</h5>";

    for($a_index = 0; $a_index < count($menu); $a_index++ ){

        $isCrepeVegan = $menuAssoc[$a_index]["vegan"]; //variable pour une meilleure lisibilité
        $prixCrepeEnCours = $menuAssoc[$a_index]["prix"];
        if($isCrepeVegan && $prixCrepeEnCours){
            echo "<p>". $menuAssoc[$a_index]["nom"]. ".....". $prixCrepeEnCours." EUR </p>"; 
        } 
    }
?>
