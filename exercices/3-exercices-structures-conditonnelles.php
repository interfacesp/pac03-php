<?php




   /**
      * Exercice 6
      * 
      *  Crêpes Sucre: 10 eur
      *  Crêpe Mikado : 15 eur (réduction)
      *  Crêpe Chocolat: 21 eur (réduction)
      *  
      *  Afficher un message de "Réduction" à côté 
      * des crêpes de prix impair
      */
      echo "<h4>Exercice 6 - Structures conditionnelles </h4>";

      $prixCrepeSucre = 10;
      $prixCrepeMikado = 15; 
      $prixCrepeChoco = 21; 

      echo "<p>";
      if($prixCrepeSucre % 2 == 1){
         echo "Crêpe Sucre: ". $prixCrepeSucre. "(réduction)";
      }else {
         echo "Crêpe Sucre: ". $prixCrepeSucre; 
      }
      echo "</p>";

      echo "<p>";

      if($prixCrepeChoco %2 == 1) {
         echo " Crêpe choco: ". $prixCrepeChoco. "(réduction)";
      }else {
         echo " Crêpe choco: ". $prixCrepeChoco; 
      }
      echo "</p>";


      echo "<p>";

      if($prixCrepeMikado % 2 == 1) {
         echo " Crêpe Mikado". $prixCrepeMikado. "(réduction)"; 
      }else {
         echo "Crêpe Mikado ". $prixCrepeMikado; 
      }

      echo "</p>";

      /**
       * Version Maya
       */

      echo "<p>";
      echo "Crêpe Mikado". $prixCrepeMikado; 
      if($prixCrepeMikado % 2 == 1) {
         echo " (réduction)"; 
      }
      echo "</p>";


    /**
     * Un nombre impair est un nombre dont le reste de la division entière est égale à 1.
     *  X est impair si X = (y*2) + 1. Exemple: 5/2 = (2*2) + 1
     * Le modulo % est une opération qui va renvoyer le reste.
     *  Ici,dans l'exemple, avec 5/2, il renverrait 1.
     */

    



  /**
       *  Soit l'assocation suivante: 
       *  
       *  
       *  A -> Table 1
       *  B -> Table 2 
       *  C -> Table 3
       *  D -> Table 4
       *  E -> Table 5
       * 
       * A l'aide d'une instruction "Switch",
       *  construisez
       * les associations ci-dessus de sorte que: 
       * 
       *  Exemple: 
       * $lettre='A';
       * switch($lettre){
       *    case 'A' : echo "Table 1"; 
       *                break ;
       * 
       * }
       * 
       * 
       * 
       
       */
      echo "<h4>Exercice Switch </h4>"; 
       $tram= 821; 
       switch($tram){
          case 3: echo "Midi bas";
                  break; 
          case 4: echo "Midi bas";
                  break;  
          case 51: echo "Midi bas";
                   break; 
          case 82: echo "Midi haut"; 
                   break; 
          default : echo "Appel centrale";
       }


      $lettre='A'; 
   
      switch($lettre) {
         case 'A': $result= 'Table 1';
                   break;  
         case 'B': $result= 'Table 2'; 
                   break; 
         case 'C':  
                  $result = 'Table3'; 
                  break; 
         case 'D': $result = 'Table4'; 
                   break; 
         case 'E': $result= 'Table 5'; 

         default: $result = "Aucune table trouvée pour cette lettre";
      }

      echo "<p>";
      echo $lettre."-->". $result; 
      echo "</p>"; 
    
  


?>
