<?php
    include_once 'data/db-stib.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Stib - Stops</title>
</head>
<body>

    <h4>Tous les arrêts</h4>
    <ul>
        <?php

            $queryStops = "select * from stop"; 
            $statement = $mysqlClient->prepare($queryStops);
            $statement->execute(); 

            $resultStops = $statement->fetchAll();

            foreach ($resultStops as $aStop) {
                    echo "<li>". $aStop['stop_name']. "</li>";

            }

        ?>
    </ul>
   
    
</body>
</html>