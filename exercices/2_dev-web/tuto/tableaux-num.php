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

    <h4>Exercices - Tableaux numérotés </h4>
       

    <h4>Réponses </h4>
        
     <?php
        /**
         *  1. $fruits = ["banana", "grenade", "blueberry", "mango"];
         *     afficher le 3 ème élément
         * 
         *  2. Afficher la taille du tableau avec une fonction appropriée
         *      
         *  3. Ajouter un nouveau fruit dans le tableau : peach
         * 
         * */ 
        
         //1
         $fruits =["banana", "grenade", "blueberry", "mango"];
         echo $fruits[2];  // blueberry

        //2 taille càd nombre d'éléments 
        $nombreFruits= count($fruits); //4 

        //3
        array_push($fruits,"peach");
        // $fruits[] = "peach";

        //afficher tout 
        for($i = 0 ; $i < count($fruits); $i++){
            echo $fruits[$i];
        }




     ?>


            
     <!-- Footer -->
    
    
     <p>Frontend Dev - Interface3 - 2022</p>

<p>
    <a href="http://www.interface3.be/fr/text/mentions-legales">Legal Terms</a> 
</p>

</body>
</html>