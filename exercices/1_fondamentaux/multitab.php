<?php

    $tableau1 = ["A","B","C"];
    $tableau2 = ["D","E","F"];
    $nbElements = count($tableau2); // la taille est la même dans les 2 tableaux
    for($i=0; $i < $nbElements ; $i++){
        // echo $tableau1[$i];
        // echo $tableau2[$i];
        echo $tableau1[$i]."-".$tableau2[$i]."<br>";    
    }

?>