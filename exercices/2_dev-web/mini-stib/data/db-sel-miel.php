<?php
    try {
        $mysqlSelEtMiel = new PDO(
            sprintf('mysql:host=%s;dbname=%s;port=%s', 
            "localhost",
            "sel-et-miel",
            3306),
            "root",
            "root"
        );
        $mysqlSelEtMiel->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(Exception $exception) {
        die('Oops, il y a eu problème : '.$exception->getMessage());
    }
?>