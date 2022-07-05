<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message </title>
</head>
<body>

<h3>Message</h3>

<form method="post" action="traitement-message.php">
       
        <div>
            <label for="leMessage">Message: </label> 
            
            <br>
            <br> 

            <textarea id="leMessage" name="message" rows="5" cols="50"></textarea>
        </div>

        <input type="submit" value="Envoyer le message">
    </form>

    
</body>
</html>