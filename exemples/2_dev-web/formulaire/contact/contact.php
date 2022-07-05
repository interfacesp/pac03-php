<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

    <h3>Ecris-moi!</h3>

   <form method="post" action="traitement-message.php">
       
        <div>
            <label for="leMessage">Message: </label> 
            
            <br>
            <br> 

            <textarea id="leMessage" name="message" rows="5" cols="50"></textarea>
        </div>

        <input type="submit" value="Envoyer le message">
    </form>


    <h4>Traitement message dans la même page</h4>

    <?php 
        if(isset($_POST['message']) && !empty($_POST['message'])){
            //Nous avons reçu un message. 
            $message = $_POST['message'];
            echo "<p>Message reçu: $message</p>";
        }

    ?> 



</body>
</html>