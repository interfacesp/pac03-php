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


            <!-- continue here... -->

        </ul> 
    </nav>

    <!-- content -->

    <h4>Exercices</h4>

        <ul>
            <li>Déclarer une variable 'name' qui contient votre prénom. Afficher le contenu
                de la variable avec l'instruction 'echo'</li>
            <li> Déclarer une variable 'lastname' qui contient votre nom de famille. Afficher le contenu </li>

            <li>Afficher sur une seule ligne le contenu de 'name' suivi du contenu de 'lastname' </li>
 
            <li> Déclarer une variable 'budget' avec comme montant 50. Déclarer une autre variable
        'expense' (dépense) avec montant 15. Afficher le budget restant après retrait de la dépense </li>
 

        </ul>

    <h4>Réponses</h4>


        <ul>    

            <li>
                <?php
                    $name = "espoir";
                    echo $name; 
                    // echo "<li>". $name."</li>";
                    // echo "<li>$name</li>";
                ?> 
            </li>
            
            <li>
                <?php 
                    $lastname = "gahungere";  
                    echo $lastname; 
                ?>
                
            </li>

            <li>
                <?php 
                    // echo $name. " ". $lastname;
                    echo "$name $lastname"; 
                ?>
            </li>

            <li>

                <?php 
                    $budget = 50; 
                    $expense =  15; 
                    echo $budget - $expense;
                ?>
                
            </li>
          

        </ul>


     <!-- Footer -->
    
    
     <p>Frontend Dev - Interface3 - 2022</p>

<p>
    <a href="http://www.interface3.be/fr/text/mentions-legales">Legal Terms</a> 
</p>

</body>
</html>