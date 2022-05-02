<?php

    /**
    * Exercice 1
    * Afficher "Bienvenue chez Sel & Miel" 
    */
    echo "Exercice 1 <br/>"; //<br/> retour à la ligne en HTML  
    echo "Bienvenue chez Sel & Miel";

    

    /**
    * Exercice 2
    *   
    *  Afficher "Bienvenue chez Sel & Miel". 
    *  "Sel & Miel" étant contenue dans une variable 
    */

    echo "<br/>"; 

    echo "Exercice 2 <br/>";

    $nom ="Bienvenue chez Sel & Miel"; 
    echo $nom;// affiche juste le contenu de la variable $nom

    echo "<br/>"; //retour à la ligne
    echo "Exercice 2 - toujours <br/>";

    $selEtMiel ="Chez Sel & Miel";
    echo "Bienvenue ".$selEtMiel; 
    
    /**
     * 
     * Exercice 3 
     * 
     * Afficher la concaténation de variables (chaînes de caractères)
     * Par ex: "Bienvenue" 
     *         "Chez Sel & Miel"
     * 
     * ou 
     * 
     * "Bienvenue"
     * "Chez"
     * "Sel & Miel"
     * 
     *
     *  Le résultat attendu:  "Bienvenue chez Sel & Miel"
     */
        //exemple avec titre <h3></h3> pour retours à la ligne faciles
        echo "<h3>Exercice 3</h3>"; 

        $bienvenue="Bienvenue ";
        $chezSelEtMiel="Chez Sel & Miel";

        echo $bienvenue.$chezSelEtMiel;


    /**
     * 
    * Exercice 4 
    * Afficher le nom d'une crêpe et son prix, en utilisant des variables
    *  exemple: Crêpe aux Fraises: 9 EUR
    */

    echo "<h4>Exercice 4</h4>";

    $crepeFraise= "Crêpe aux Fraises"; 
    $prixCrepeFraise = 9;
    
    echo $crepeFraise. " : ". $prixCrepeFraise. " EUR";
   

    /**
     * Exercice 5 
     *  Crêpe aux Fraises: 9 EUR
     *  Crêpe au Sucre: 10 EUR
     *  Crêpe aux oeufs: 20 EUR
     * 
     *   Sachant que les prix ci-dessus sont Hors TVA. 
     *   TVA est 6% 
     *   
     *   Afficher les prix TVA comprise. 
     * 
     */

     echo "<h4>Exercice 5 </h4>";

     $crepeFraises = "Crêpe aux Fraises";
     $prixCrepeFraises= 9;
     $majorationTVA = $prixCrepeFraises * 0.06;
     $prixTotalCrepeFraise= $prixCrepeFraises + $majorationTVA; 
     
     echo "<p>  Crêpe aux Fraises HTVA...........". $prixCrepeFraise. " EUR </p>";
     echo "Crêpe aux Fraises TVAC.............". $prixTotalCrepeFraise. " EUR </p> "; 

     $crepeSucre = "Crêpe aux Sucre"; 
     $prixCrepeSucre = 10; 
     $majorationTVASucre = $prixCrepeSucre * 0.06; 
     $prixTotalCrepeSucre = $prixCrepeSucre + $majorationTVASucre; 

      
     echo "<p>  Crêpe Sucre HTVA :". $prixCrepeSucre. " EUR </p>";
     echo "Crêpe aux Sucre TVAC. :". $prixTotalCrepeSucre. " EUR </p> "; 



     $crepeSucre = "Crêpe aux Oeufs"; 
     $prixCrepeOeufs = 20; 
     $majorationTVAOeufs = $prixCrepeOeufs * 0.06; 
     $prixTotalOeufs = $prixCrepeOeufs + $majorationTVAOeufs;
     
     
     echo "<p>  Crêpe Oeufs HTVA :". $prixCrepeOeufs. " EUR </p>";
     echo "<p> Crêpe aux Oeufs TVAC. :". $prixTotalOeufs. " EUR </p> "; 




    




?>



