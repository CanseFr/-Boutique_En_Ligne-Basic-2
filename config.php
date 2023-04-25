<?php 

require_once 'menu.php';

    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=php_formation;charset=utf8", "root", "Rootoorn");
        echo "<p style='color:green;'>". "Connecté"."</p></br>";
    }
    catch(PDOException $e)
    {
        echo "<p style='color:red;'>"."Echec de la connexion"."</p></br>";
        die('Erreur : '.$e->getMessage());
    }
