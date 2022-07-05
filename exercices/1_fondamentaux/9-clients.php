<?php
    
    $client = [
        "nom" => "Alfreds Futterkiste", 
        "adresse" => "Obere Str.",
        "pays" => "Allemagne",
        "ville" => "Berlin"
    ]; 


    /**
     * Afficher le nom 
     */

    echo $client['nom']. "<br>";

     /**
     * Afficher l'adresse 
     */

     
    echo $client['adresse']. "<br>";

     /**
      * Parcourez les clé-valeurs, avec une boucle foreach
      */

    foreach($client as $cle => $value){
        echo "$cle : $value <br>";
    }

    /** Même parcours avec mise en forme HTML */    
    foreach($client as $cle => $value){
        echo "<h5>$cle:</h5>";
        echo "<p>$value</p>";
        //...on peut continuer à mettre des instructions
        
    }

    // echo "<h4>Avant ajout code postal</h4>"; 
    // var_dump($client); 
     /**
     * Ajouter code postal client 
     */


    $client['code-postal'] = 1000;
    //pour afficher: echo $client['code-postal'];

    // var_dump($client);



     /**
     * Ajouter et Afficher la date de naissance. La date sera de format textuelle : jj-mm-aaaa
     */

     $client['date-de-naissance'] = "O5-07-2022"; 
    //avec fonction date: $client['date-de-naissance'] = date('d=>=>mY'); 
 
     echo $client['date-de-naissance']; 


     /**
      * Créer une tableau indexé, composé de 3 clients, dont vous choisirez les valeurs de votre choix. 
      *    Voir exemple dans "fournisseurs.php" 
      */
        /**
       * Parcourez ce tableau indexé avec un boucle for en affichant la liste des clients
       */

    $clients = [
                [
                    "nom" => "Alfred",
                    "adresse" => "Obere Str.",
                    "pays" => "Allemagne",
                    "ville" => "Berlin"
                ], 

                [
                    "nom" => "La boite de Bouffe d'Amélie",
                    "adresse" => "Rue Gaucheret",
                    "pays"=> "Belgique",
                    "ville" => "Bruxelles"

                ],

                [
                    "nom" => "Ket",
                    "adresse" => "Parc Gaucheret",
                    "pays" => "Belgique",
                    "ville" => "Bruxelles"
                ]
            ];


    $nombreClients = count($clients);

    echo "Nombre de clients: $nombreClients <br>";

    for($i=0 ; $i < $nombreClients; $i++){
        echo (" <h4> Client: </h4> <p>". $clients[$i]['nom']. " </p>");
        echo (" <h4> Adresse: </h4> <p>". $clients[$i]['adresse']. " </p>");
  
    }


?> 