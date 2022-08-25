<?php 
include_once 'database/db-connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaufres - </title>
</head>
<body>

    <h3>Menu Gaufres</h3>
    
    <p>La liste de ces gaufres provient de la base données</p>

    <ul>
    
        <?php
        
            $query= "
                SELECT  * FROM gaufres;
            ";
            $lectureGaufres= $mysqlClient->prepare($query);
            
            $lectureGaufres->execute();

            $listeGaufres = $lectureGaufres->fetchAll();

            foreach ($listeGaufres as $uneGaufre) {
                echo "<li>(". $uneGaufre['id']. ") ". $uneGaufre['nom'].
                        " dont le prix est ".$uneGaufre['prix']." </li>";
        
            }
        ?>

    </ul>

</body>
</html>