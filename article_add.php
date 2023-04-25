<?php 

require_once 'config.php';



?>


    <title>Article</title>
</head>
<body>
    <form action="article_addTraitement.php"  method="post" enctype='multipart/form-data'> 
        <div class="centreInputHigh">
            <h4>Ajouter un Article</h4>
        <!-- titre  -->
            <input class="inp" type="text" placeholder="Titre" name="titre" /><br><br>
        <!-- date parution  -->
            <input class="inp" type="date" placeholder="Date Parution" name="date_parution" /><br>
        <!-- Couverture -->
            <label class="lab" ><strong>Choisir photo de couverture:</strong></label>
            <input class="lab"  type="file"  name="couverture"><br>  <!-- accept="image/png, image/jpeg" -->
        <!-- Contenu -->
            <textarea type="text" placeholder="Ecrire votre contenu ..." name="contenu" rows="5" cols="33"></textarea><br>
        <!-- Public ? -->
            <label class="lab"><strong>Public</strong></label><br> 
            <input class="inp" type="radio" name="est_public" value="1">
            <label class="lab">Oui</label><br>
            <input class="inp" type="radio" name="est_public" value="0">
            <label class="lab">Non</label>
        <!-- ID Auteur -->
            <!-- <input class="inp" type="text" placeholder="ID Auteur" name="auteur_id" /><br> -->

            <select class="inp" name="auteur_id" >
                <option value="">Choisir ID de l'auteur</option>

                    <?php
                    $query = "SELECT id,nom FROM auteurs";
                    $pdostmt = $bdd->prepare($query);
                    $pdostmt->execute();

                    while ($ligne = $pdostmt->fetch(PDO::FETCH_ASSOC)):
                    
                    ?>
                
                <option value="<?php echo $ligne["id"]  ?>"><?php echo $ligne["id"]." - ".$ligne["nom"]  ?></option>

                    <?php endwhile; ?> <!-- preciser fin de la boucle-->

            </select>

            <button type="submit" class="button" name="ok" value="OK">Valider</button>
        </div>
    </form>
    
</body>
</html>