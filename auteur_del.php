<?php 

require_once 'config.php';

    if(!empty($_GET["id"])){
 
            // var_dump($_GET["id"]);
        $query = "DELETE FROM auteurs WHERE id=:id";
        $objstmt = $bdd->prepare($query);
        $objstmt->execute(["id" => $_GET["id"]]);
        $objstmt->closeCursor();
        header("Location:listAuteur.php");
        }
 
?>