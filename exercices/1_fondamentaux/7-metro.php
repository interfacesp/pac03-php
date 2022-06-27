<?php

    $arretsTram4 = ["Gare du Nord",
                    "Rogier",
                    "De Brouckere",
                    "Bourse",
                    "Annessens",
                    "Lemmonier",
                    "Gare du Midi"  
    ];

    $nombreArretsTram4 = count($arretsTram4); 

            
    $arretsMetro1 = [ "Gare De l'Ouest",
                      "Beekant",
                      "Etangs Noirs",
                      "Sainte Catherine",
                      "De Brouckere",
                      "Gare Centrale",
                      "Park",
                      "Arts-Loi",
                      "Maalbeek",
                      "Schuman",
                      "Merode"
    ];
    $nombreArretsMetro1 = count($arretsMetro1);
    
    $nombreArretsTotals= $nombreArretsTram4 + $nombreArretsMetro1;

    //Le nombre d'arrêts du réseau est 18
    echo "Le nombre d'arrêts du réseau est ".$nombreArretsTotals."<br>";

    //Il y a 18 arrêts sur tout le réseau.
    echo "Il y a ".$nombreArretsTotals." arrêts sur tout le réseau <br>";
    echo 'Il y a $nombreArretsTotals arrêts sur le réseau <br>'; //n'évalue pas la variable nombreArretsTotals
    echo "Il y a $nombreArretsTotals arrêts sur le réseau <br>"; 

    echo "<h4>Tram 4</h4>";

    for($indice=0;$indice <count($arretsTram4);$indice++){
        echo $arretsTram4[$indice]."<br/>";
    }



    echo "<h4>Metro 1</h4>";

    for ($curseur = 0; $curseur < $nombreArretsMetro1; $curseur++){
        echo $arretsMetro1[$curseur]."<br>";
    }

    echo "<h4>Afficher Bourse ou Gare du  midi</h4>";

    echo $arretsTram4[3];//affiche "Bourse"
    
    for ($position = 0; $position < $nombreArretsTram4; $position++){
        
        if($arretsTram4[$position] == "Bourse" || $arretsTram4[$position] == "Gare du Midi"){
            echo $arretsTram4[$position];
        }
    }


?>