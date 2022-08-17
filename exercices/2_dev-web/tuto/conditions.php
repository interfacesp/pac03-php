<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

  <!-- Header -->

    <img src="img/logo-if3.png" alt="Logo Interface 3">

    <h1>Mon petit Tuto PHP</h1>
    
    <!-- Navigation menu -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="variables.php">Variables</a></li>
            <li><a href="conditions.php">Structures Conditionnelles</a></li>
            <li><a href="boucles.php">Boucles</a></li>
            <!-- up to you next   -->

        </ul> 
    </nav>

    <!-- content -->

    <h4>Exercices - Structures Conditionnelles </h4>
       
            <p>
                Vous avez un budget de 120 EUR. Vous aimeriez acheter un smartphone d'occasion à 58 EUR.
            ainsi qu'une plante à 15 eur. 
            Ecrivez un test conditionnel qui détermine si l'achat du smarpthone et de la plante rentrent
            dans le budget ou pas.
            </p>
        
            <p> 
                
                $currentTemperature= 25
                $maxTemperature2021 = 30
                <br>
            Si la température actuelle est supérieure à la température max de 2021,
            afficher "ça chauffe plus que l'année passée "  
            Sinon, "la temp. actuelle n'a pas dépassée celle de l'année passée" 
        
            </p>
     

            <h4>Réponses </h4>


                <?php 
                    $budget = 120;
                    $smartphone = 58;
                    $plante = 15; 

                    if($smartphone + $plante <= $budget){
                        echo "Les achats cadrent avec le budget";
                    }else{
                        echo "Les achats sont hors budget";
                    }
                ?> 

                <p>
                    <?php
                        $currentTemperature= 25; 
                        $maxTemperature2021 = 30; 

                        if($currentTemperature > $maxTemperature2021){
                            echo "ça chauffe plus que l'année passée";
                        }else {
                            echo "la température actuelle ne dépasse pas celle de l'année passée";
                        }

                    ?>
                </p>
                


     <!-- Footer -->
    
    
     <p>Frontend Dev - Interface3 - 2022</p>

<p>
    <a href="http://www.interface3.be/fr/text/mentions-legales">Legal Terms</a> 
</p>

</body>
</html>