<?php 


require_once 'config.php';
echo "traitement en cours ...";



// Traitement fichier 
function saveFiles($_file){
    $infos = $_file['couverture']['type'];
    $infosTypeFichierArray = explode("/", $infos);
    $extension_authorized = array('jpg', 'jpeg','gif', 'png', 'pdf');

    if(in_array($infosTypeFichierArray[1],$extension_authorized)){
        move_uploaded_file($_file['couverture']['tmp_name'],'uploads/' . basename($_file['couverture']['name']));

        echo "Image sauvegardé sur le serveur";
    } else {
        echo "L'extension du fichier n'est pas autorisée.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo $_FILES['couverture']['name']."\n";            /* nom du fichier */         
    //echo $_FILES['couverture']['type']."\n";            /* type du fichier */          
    //echo $_FILES['couverture']['size']."\n";            /* taille en octets */        
    //echo $_FILES['couverture']['tmp_name']."\n";        /* emplacement du fichier temporaire sur le serveur */
    //echo $_FILES['couverture']['error']."\n";           /* code erreur du téléchargement */      

    // tester envoi et erreur fichier 
    if (isset($_FILES['couverture']) AND $_FILES['couverture']['error'] == 0 ){
    
        if (file_exists('uploads/')) {
            if($_FILES['couverture']['size'] <= 1000000){
                saveFiles($_FILES);
            } else {
                echo "c'est une bite";
            }
    } elseif (mkdir('uploads/'))  {
            if (file_exists('uploads/')) {
                if ($_FILES['couverture']['size'] <= 1000000) {
                    saveFiles($_FILES);
                }
            } else {
                echo "c'est une bite";
            }
    } else {
        echo "Error 666: puta madre ";
    }
    }
} else {
    echo "Error : requete";
}

$pathPicture = "uploads\\".$_FILES['couverture']['name'];

if(!empty($_POST["titre"]) && !empty($_POST["contenu"]) && !empty($_POST["date_parution"]) && !empty($_POST["est_public"]) && !empty($_POST["auteur_id"]) ){ // && !empty($_POST["couverture"])
    $query = "INSERT INTO articles(titre, contenu, date_parution, couverture, est_public, auteur_id) VALUES (:titre, :contenu, :date_parution, :couverture, :est_public, :auteur_id)";
    $stmt = $bdd->prepare($query);
    $stmt->execute( [
                        "titre"=>$_POST["titre"], 
                        "contenu"=>$_POST["contenu"], 
                        "date_parution"=>$_POST["date_parution"],
                        "couverture"=>$pathPicture, 
                        "est_public"=>$_POST["est_public"], 
                        "auteur_id"=>$_POST["auteur_id"]
                                                                        ]);
    $stmt->closeCursor();
}

header("Location:article_add.php");
    
// } 


?>