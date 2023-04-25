<?php

require_once 'config.php';
echo "traitement en cours ...";

$nom = $_POST['nom'];           
$prenom = $_POST['prenom'];     
$dateN = $_POST['dateN'];       

$sql = "INSERT INTO auteurs (nom, prenom, date_naissance) VALUES (?,?,?)";
$stmt= $bdd->prepare($sql);
$stmt->execute([$nom, $prenom, $dateN]);

header("Location:listAuteur.php")

?>