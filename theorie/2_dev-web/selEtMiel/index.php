<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">

    <title>Sel et Miel</title>
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Le logo de Sel et Miel"/>
    </header>
    <h1>Welcome to Sel et Miel </h1>

    <h2>The best Pancakes in Town!</h2>
    
    <div class="carte">
        <ul>
            <?php
                
                $menu = 
                        ["pistache",
                            "fraise", 
                            "vanille",
                            "framboise",
                            "caramel",
                            "Crêpe spéciale",
                            "Snack au Rhum",
                            "Chocolat"
                        ];
                
                 $menu [] = "Autre chocolat";       
                 $menu [] = "Chocolat 3"; 
                 $menu [] = "Chocolat 4";   

                $numberItems = count($menu); 
                for($i= 0; $i < $numberItems ; $i++){
                        echo  "<li>". $menu[$i]."</li>";
                }

                $menu [] = "Chocolat 5 "; // ne sera pas affiché                 



            ?>

        </ul>
        
    </div>

    <div class="carte">
            <table>
                <?php
                    for ($index=0; $index < count($menu); $index++) { 
                        echo " <tr> <td>".
                                 $menu[$index]. 
                                "</td>
                                <td> 12 EUR </td> 
                        </tr>"; 
                    }
                ?>

            </table>
    </div>         

   

    <footer>
           Telephone number: +321234567
           Email: sel@miel.be
    </footer>
</body>
</html>


