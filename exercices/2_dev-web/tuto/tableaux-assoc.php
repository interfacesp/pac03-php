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

    <h4>Exercices - Tableaux Associatifs </h4>
       
    
    

    <h4>Réponses </h4>
        
    <?php
        /***
             * 1. pets= ["john" => "cat", "sophia" => "dog", "Nathalie" = "turtle", "Nicolas"=> "dog" ]; 
            *    Afficher l'animal de compagnie de Nathalie

            
            * 2. Afficher les noms de personnes qui ont un chien en utilisant une boucle


                3. $maxTempPerYear= array("2018" => 25, "2019" => 30, "2020 => 31, "2021" => 32);

                Afficher les années où la température a dépassé 30, à l'aide d'une boucle
        */

        //1
        $pets= ["john" => "cat",
                 "sophia" => "dog", 
                 "Nathalie" =>"turtle", 
                 "Nicolas"=> "dog" ];

        echo $pets["Nathalie"]; // turtle

        //2
        foreach($pets as $x => $valeurX) {
            if($valeurX == "dog"){
                echo $x; 
            }
        }

        //3 
        $maxTempPerYear= array("2018" => 25, "2019" => 30, "2020" => 31, "2021" => 32);
        
        foreach($maxTempPerYear as $key => $valeur){
            if($valeur > 30 ){
                echo $key; 
            }
        }

    ?>


            
     <!-- Footer -->
    
    
     <p>Frontend Dev - Interface3 - 2022</p>

<p>
    <a href="http://www.interface3.be/fr/text/mentions-legales">Legal Terms</a> 
</p>

</body>
</html>