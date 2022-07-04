<?php

/**
 * Ecrivez un programme PHP de sorte 
 * 2 variables booléennes: drivingLicense, car 
 * 
 * 'drivingLicense':  true ou false - détermine si on a le permis ou pas
 * 'car' : true ou false - détermine si on a une voiture ou pas
 * 
 *  Si on a le permis 
 *       
 *             si on a une voiture 
 *                       écrivez "conduisez à la gare"
*               sinon 
*                       écrivez "vous pouvez louer une voiture pas chère
 *  sinon
 *              si on a une voiture 
 *                      écrivez "hors la loi"
 *              
 *              sinon
 *                      écrivez "prenez un villo"
 *             
 *
 *  
 */ 

    $drivingLicense;
    $car; 


    /**
     *  Solution 1: explicitement spécifier les 4 combinaisons possibles 
     */

    if($car && $drivingLicense){ 
        //$car == true && $drivingLicense == true
        echo "conduisez à la gare";
    }elseif ($drivingLicense && !$car ){
        //$drivingLicense == true && $car == false
        echo "vous pouvez louer une voiture pas chère"; 
    }

    if(!$drivingLicense && $car){
        //$driving == false && $car == true
        echo "hors la loi";
    }elseif (! $car && !$drivingLicense){
        //$car == false  && $drivingLicense == false
        echo "prenez un villo"; 
    }


    /**
     * Solution 2: 
     *  Focus sur permis d'abord: 
     *          si oui : 
     *                  on teste la disponibilité voiture
     *                      si oui:conduisez gare
     *                      si non: vous pouvez louer une voiture
     *          si non:
     *                  on test la disponibilité voiture
     *                      si oui: hors la loi
     *                      si non: prenez un villo
     *  
     */

     if($drivingLicense){
        //Permis
            if($car) {
                //on a une voiture
                echo "conduisez à la gare"; 
            }else {
                //pas de voiture
                echo "vous pouvez louer une voiture";
            }
     }else {
        //Pas de permis 
            if($car){
                //on a une voiture
                echo "hors la loi";
            }else {
                //pas de voiture
                echo "vous pouvez louer un villo";
            }

     }

 ?> 