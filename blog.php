<?php 

require_once 'config.php';

$query = "SELECT * FROM articles ";
$pdostmt = $bdd->prepare($query);
$pdostmt->execute();
while($row=$pdostmt->fetch(PDO::FETCH_ASSOC)):

?>    
<div class="rowBlog">
    <div class="blog" >
        <div class="artNum">
            <h1 > <strong>Article n°</strong> <?php echo $row["id"]; ?></h1>
        </div>
        
    <!-- titre  -->
        <h1 ><strong>Titre :</strong></h1>
        <p ><?php echo $row["titre"]; ?></p>
    <!-- date parution  -->
        <h1 ><strong>Date de parution :</strong></h1>
        <p ><?php echo $row["date_parution"]; ?></p>
    <!-- Couverture -->
        <h1 ><strong>Couverture :</strong></h1>
        <img src="<?php echo $row["couverture"]; ?>" alt=''>
        
    <!-- Contenu -->
        <h1 ><strong>Contenu :</strong></h1>
        <p ><?php echo $row["contenu"]; ?></p>
    <!-- Public ? -->
        <h1 ><strong>Public :</strong></h4>
        <p ><?php echo $row["est_public"]; ?></p>
    <!-- ID Auteur -->
        <h1 ><strong>ID de l'auteur :</strong></h1>
        <p ><?php echo $row["auteur_id"]; ?></p>
        
    </div>
</div>

<?php 
endwhile;
$pdostmt->closeCursor();
?>