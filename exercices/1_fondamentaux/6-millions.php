<?php 
 /**
  * Qui veut gagner des millions, en tableau ? 
  */

$tableauMontants = [100, 
                    200,
                    300,
                    1000,
                    2000,
                    4000,
                    8000,
                    12000,
                    24000,
                    36000,
                    72000,
                    150000,
                    300000,
                    500000,
                    1000000
                ];

echo "<h4>indice inférieur ou égal au à la position du dernier élement </h4>"; 

for( $index = 0; $index <= 14; $index++) {
	echo $tableauMontants[$index]."<br>";		
}

echo "<h4>indice strictement inférieur au nombre d'éléments </h4>"; 

for ($curseur=0; $curseur < count($tableauMontants) ; $curseur++) { 
   echo $tableauMontants[$curseur]."<br>"; 
}

?>