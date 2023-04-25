<?php 

require_once 'config.php';

    if(!empty($_GET["id"])){
 
            // var_dump($_GET["id"]);
        $query = "DELETE FROM articles WHERE id=:id";
        $objstmt = $bdd->prepare($query);
        $objstmt->execute(["id" => $_GET["id"]]);
        $objstmt->closeCursor();
        header("Location:article_list.php");
        }
 
?>

