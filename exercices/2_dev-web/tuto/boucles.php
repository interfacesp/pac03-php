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

    <h4>Exercices - Boucles </h4>
       
     <p>
        Remplissez les 3 petits points de sorte qu'on affiche le contenu 
        de la variable $i tant que $i est strictement inférieur à 7 
            $i = 1;

            ...($i ... 7){
                echo $i;
                ...
            }
     </p>

    <p>    Ecrivez une boucle "while" qui permet de compter jusqu'à 45. </p>

    <p>
        Remplissez les 3 petits points pour créer une boucle qui compte jusque 20
            ... ($i = 0; $i < 20; ...) { 
                echo $i;
            }
    </p>
    
    <p>
        Remplissez les 3 petits points pour parcourir le tableau de fruits
        
        $fruits = ["banana", "grenade", "blueberry", "mango"]; 

        ...($fruits ... $aFruit) {
                echo $aFruit;
            }
    
    </p>
    

    <h4>Réponses </h4>
        
        <?php 

            //Exercice 1

            for($index = 0; $index <= 7; $index++){
                echo $index;
            }

            $i = 1;

            echo "<br>"; 

            while ($i <= 7){
                echo $i;
                $i = $i + 1;
            }

            echo "<br>";

            //Exercice 2
        
            // $i = 1;
            //possibilité 1
            $i = 0;
            while ($i < 45){
                echo $i+1;
                $i++; 
            }

            echo "<br>";
            //possiblité 2
            $i = 1;
            while ($i <= 45){
                echo $i;
                $i++; 
            }
        
        
        ?>
        

        
        

            
     <!-- Footer -->
    
    
     <p>Frontend Dev - Interface3 - 2022</p>

<p>
    <a href="http://www.interface3.be/fr/text/mentions-legales">Legal Terms</a> 
</p>

</body>
</html>