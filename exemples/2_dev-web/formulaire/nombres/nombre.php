<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement </title>
</head>
<body>
        <h4>Supérieur à 10?</h4>

         
        <form method="post" action="nombre.php">
           
            
                <label for="leNombre">Nombre: </label>
                <input type="number" name="nombre" id="leNombre">
                <input type="submit" value="Demander">
        </form>


        <?php
            if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
                $nbre = $_POST['nombre']; 
                
                if($nbre > 10 ){
                    echo "<p> $nbre supérieur à 10 </p>"; 
                }else {
                    echo "<p>$nbre inférieur ou égal à 10</p>";
                }
            }
        ?>
    
</body>
</html>