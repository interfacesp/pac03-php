<?php

    $fournisseur = [
        "nom" => "IceBreaker",
        "addresse" => "Rue du Livourne",
        "ville" => "Bruxelles"
    ]; 



    /**
     * Afficher l'adresse du fournisseur 
     */

     echo $fournisseur['addresse']. "<br>"; 

     /**
     * Ajouter le pays : Belgique
     */
    $fournisseur['pays'] = "Belgique";
    //ajout d'une cle sans valeur: $fournisseur['cle-sans-valeur'];

     /**
     * Afficher le nom 
     */

     echo $fournisseur['nom'];


     /**
      * Parcourez les clé-valeurs, avec une boucle foreach
      */

    echo "<h4>Parcours avec Foreach</h4>";

    foreach($fournisseur as $cle => $valeur){
        echo $cle."<br>". $valeur. "<br>";
    }

    echo "<h4>Autre format affichage </h4>"; 

    foreach($fournisseur as $cle => $valeur){
        echo $cle." : ". $valeur. "<br>";
    }

    echo "<h4>Troisième format affichage </h4>"; 

    foreach($fournisseur as $cle => $valeur){
        echo "<p> $cle : $valeur</p>";
    }

     /**
      * Créer une tableau indexé, composé de 3 fournisseurs, dont vous choisirez les valeurs de votre choix. 
      * De manière similaire que le fournisseur ci-dessus
      * 
      * Exemple: 
      *    $fournisseurs=  [
      *                         [   
      *                            "nom" => "IceBreaker",
      *                             "addresse" => "Rue du Livourne",
      *                             "ville" => "Bruxelles"  
      *                         ],

      *                          [   
      *                            "nom" => "IceBreaker",
      *                             "addresse" => "Rue du Livourne",
      *                             "ville" => "Bruxelles"  
      *                         ], etc. 
      *                     ];
      */



      /**
       * Parcourez ce tableau indexé avec un boucle for en affichant la liste des fournisseurs
       */





?> 