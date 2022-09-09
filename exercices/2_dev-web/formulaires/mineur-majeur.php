<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test age</title>
</head>
<body>

    <form action="mineur-majeur.php" method="post">

        <label for="myAge">Age: </label>
        <input type="text" name="age" id="myAge" >

        <input type="submit" value="test majorité">

    </form>


<?php
    /**
     *
     * Ecrivez une page qui reçoit  l'âge d'une personne 
     * au moyen d'un  formulaire. 
     * 
     * Déterminer si la personne est majeure ou mineure
     * 
     */
    

     if(isset($_POST['age']) && !empty($_POST['age'])){

        $age = $_POST['age'];
        if($age >= 18) {
            echo "Vous êtes majeur.e";
        }else {
            echo "Vous êtes mineur.e";
        }
        
     }
?>
    
</body>
</html>