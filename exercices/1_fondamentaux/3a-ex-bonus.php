<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Structure conditionnelles - Bonus</title>
</head>
<body>

    <h2>Structures conditionnelles - bonus</h2>
    
    <h4>C'est plein dans l'ascenseur</h4>
        <p>
            Sachant que dans un ascenseur, le maximum de personnes autorisés 
            est de 6.
            Déclarer une variable <em>$nombrePersonnes</em> qui contient une valeur entière  de votre choix. 
            Ecrivez une condition en PHP déterminant si l'ascenseur est plein ou pas.
        </p>
        <?php
            $nombrePersonnes = 10;

            if($nombrePersonnes < 6){
                echo "Il y a de la place";
            }else {
                echo "L'ascenceur est plein";
            }

            if($nombrePersonnes == 6){
                echo "l'ascenceur est plein";
            }elseif ($nombrePersonnes < 6) {
                echo "il y a encore de la place";
            }else {
                echo "Le nombre de personnes autorisés est dépassé";
            }
        ?>

    <h4>Age</h4>

        <p>
            Déclarer une variable <em>$age</em> qui contient une valeur entière  de votre choix. 
            Ecrivez une condition en PHP déterminant si la personne est mineure ou majeure.
        </p>


        <?php
        
            $age = 14; 
            $age_majorite = 18 ; 
            if($age >= $age_majorite) {
                echo "tu es bien majeur";
            }else {
                echo "tu n'est pas majeur, autrement dit, tu es mineur";
            }
        ?>
    
    <h4>Heure</h4>

        <p>
            Déclarer une variable <em>$heure</em> avec une valeur entre 0 et 24.
            Ecrivez une condition en PHP déterminant si c'est le matin, midi ou après-midi ou soir
        </p>


</body>
</html>