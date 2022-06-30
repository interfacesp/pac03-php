<?php

    
    
 

    /**
     * Addition 
     */
    
     echo "<h3>Addition</h3>";

     $nombre1 = 10; 
     $nombre2 = 11; 
     $resultatAdd = $nombre1 + $nombre2; 

     echo " $nombre1 + $nombre2 = ". $resultatAdd; 

     /**
     *  Soustraction 
     */

    echo "<h3>Soustraction</h3>";


    $nombre1 = 10; 
    $nombre2 = 11; 
    $resultatMinus = $nombre1 - $nombre2; 

    echo "$nombre1 - $nombre2 = ". $resultatMinus; 


    /**
     *  Multiplication
     */

    echo "<h3>Multiplaction</h3>";


    $nombre1 = 10; 
    $nombre2 = 11; 
    $resultatMulti = $nombre1 * $nombre2; 

    echo "$nombre1 * $nombre2 =  ". $resultatMulti; 


    /**
     *  Division 
     */

    echo "<h3>Division</h3>";


    $nombre1 = 10; 
    $nombre2 = 2; 
    $resultatDiv = $nombre1 / $nombre2; 

    echo "$nombre1 / $nombre2 = ". $resultatDiv; 


    /**
     *  Modulo : le reste de la division entière 
     */

    echo "<h3>Modulo</h3>";


    $nombre1 = 10; 
    $nombre2 = 2; 
    $resultatMod = $nombre1 % $nombre2; 

    echo "$nombre1 % $nombre2 =  ". $resultatMod; 


     /**
     *  Comparaison: plus grand que 
     */

    echo "<h3>Comparaison: Plus grand que</h3>";

    echo "$nombre1 > $nombre2 =  ".($nombre1 > $nombre2); 


        /**
     *  Comparaison: plus petit que 
     */

    echo "<h3>Comparaison: Plus petit que</h3>";

    echo "$nombre1 < $nombre2 =  ".($nombre1 < $nombre2); 

       /**
     *  Comparaison: égal
     */

    echo "<h3>Comparaison: Egal </h3>";

    echo "$nombre1 = $nombre2 =  ".($nombre1 == $nombre2); 


       /**
     *  Comparaison: Supérieur ou égal >=
     */

    echo "<h3>Comparaison: Supérieur ou égal </h3>";

    echo "$nombre1 >= $nombre2 =  ".($nombre1 >= $nombre2); 


       /**
     *  Comparaison: Inférieur ou égal
     */

    echo "<h3>Comparaison: Inférieur ou égal </h3>";

    echo "$nombre1 <= $nombre2 =  ".($nombre1 <= $nombre2); 


    /**
     *  Et logique: && 
     */

    echo "<h3>Opérateur Binaire: 'Et' logique </h3>";

    echo "Vrai && Vrai =  ".(true && true); 


     /**
     *  Ou logique: || 
     */

    echo "<h3>Opérateur Binaire: 'Ou' logique </h3>";

    echo "Vrai || Faux =  ".(true || false); 
     

?>