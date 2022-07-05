<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>

    <h4>Réception Message</h4>

    <?php 
            if(isset($_POST['message']) && !empty($_POST['message'])){
                //Nous avons reçu un message. 
                $message = $_POST['message'];
                echo "<p>Message reçu: $message</p>";
            }else {
                echo "<p>Pas de message à afficher! </p>";
            }

    ?> 
</body>
</html>

