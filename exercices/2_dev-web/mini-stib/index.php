<?php
    try {

        $mysqlClient = new PDO(
            sprintf('mysql:host=%s;dbname=%s;port=%s', 
            "localhost",
            "mini-stib",
            3306),
            "root",
            "root"
        );
        $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $exception) {
        die('Oops, il y a eu problème : '.$exception->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Stib</title>
</head>
<body>

    

    <?php 
        
        $sqlQueryLines = "SELECT * FROM line";
        $statement = $mysqlClient->prepare($sqlQueryLines); 
        $statement->execute();

        $result = $statement->fetchAll(); 



        foreach($result as $aLine){

            echo "<p>";
            echo $aLine['id']; 
            echo $aLine['line_name']; 
            echo $aLine['distance']; 
            echo "</p>";

            
        }


        // echo '<pre>';
        // print_r($result);
        // echo '</pre>'; 
    ?>



</body>
</html>