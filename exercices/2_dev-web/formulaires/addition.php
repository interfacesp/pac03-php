<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>
<body>

    <form action="addition.php" method="POST">

            <label for="myFirst">Premier Nombre: </label>
            <input type="number" id="myFirst" name="firstNumber">

            <label for="mySecond">Second Nombre: </label>
            <input type="number" id="mySecond" name="secondNumber">

            <input type="submit" value="calculer">

    </form>

    <?php
        /**
         *
         * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire. 
         * 
         * Afficher l'addition de ces nombres
         * 
         */

    
        if(isset($_POST['firstNumber'],$_POST['secondNumber']) 
        
            && !empty($_POST['firstNumber'])
            
            && !empty($_POST['secondNumber'])

        ){

            //on peut faire traitement
            $sum = 0; 
            $number1 = $_POST['firstNumber'];
            $number2 = $_POST['secondNumber'];
            $sum = $number1 + $number2; 
            echo $sum;  
        }
    ?>
    
</body>
</html>