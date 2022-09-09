<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculette</title>
</head>
<body>

    <form action="calculatrice.php" method="post">

        <p>
            <label for="myFirstNum">Premier Nombre: </label>
            <input type="number" name="firstNum" id="myFirstNum">
            
        </p>

        <p>
            <label for="mySecondNum">Second Nombre: </label>
            <input type="number" name="secondNum" id="mySecondNum">

        </p>
       
        <p>
            <label for="myOperation">Operation: </label>
            <input type="text" name="operation" id="myOperation"> 
        
        </p>
        

        
        <input type="submit" value="calculer">

    </form>





    <?php
        /**
         *
         * Ecrivez une page qui reçoit deux  nombres au moyen d'un  formulaire.
         * Elle reçoit aussi un type d'opération : + ou - ou * ou /  
         * 
         * Afficher le calcul de l'opération entrée
         * 
         */


        if(isset($_POST['operation'], $_POST['firstNum'], $_POST['secondNum']) 
            && 
          !empty($_POST['firstNum']
            && 
          !empty($_POST['secondNum'])
          && 
          !empty($_POST['operation'])   )){

            $nombre1 = $_POST['firstNum']; 
            $nombre2 = $_POST['secondNum'];
            $operation= $_POST['operation'];

            $wrongOperation = false; 
            switch($operation){
                
                case "+": $resultat = $nombre1 + $nombre2; 
                          break; 

                case "-": $resultat = $nombre1 - $nombre2;
                          break; 

                case "/": $resultat = $nombre1 / $nombre2;
                          break; 

                case "*": $resultat = $nombre1 * $nombre2;
                          break; 
                default:  $wrongOperation= true ;
            }

            if($wrongOperation) {
                echo "Operation s'est mal passé"; 
            }else {
                echo "$nombre1 $operation $nombre2 = $resultat"; 
            }

        }

    ?>
    
</body>
</html>
