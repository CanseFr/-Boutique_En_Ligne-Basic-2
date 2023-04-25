
<?php


    require_once 'config.php';

    if(!empty($_POST)){
        $query = "UPDATE articles SET  titre=:titre, contenu=:contenu, date_parution=:date_parution, couverture=:couverture, est_public=:est_public, auteur_id=:auteur_id WHERE id=:id";
        $pdostmt = $bdd->prepare($query);
        $pdostmt->execute( [
                            "titre"=>$_POST["titre"], 
                            "contenu"=>$_POST["contenu"], 
                            "date_parution"=>$_POST["date_parution"],
                            "couverture"=>$_POST["couverture"], 
                            "est_public"=>$_POST["est_public"], 
                            "auteur_id"=>$_POST["auteur_id"],
                            "id"=>$_GET["id"]
                                                            ]);
        header("Location:article_list.php");
        }

    if(!empty($_GET["id"])){

    //echo $_GET["id"];

        $query = "SELECT * FROM articles WHERE id=:id";
        $pdostmt = $bdd->prepare($query);
        $pdostmt->execute(["id"=>$_GET["id"]]);
        while($row=$pdostmt->fetch(PDO::FETCH_ASSOC)):
 
     ?>

    <!--Formulaire-->
    <form  method="post"> 
            <div class="centreInputHigh">
                <h4>Modifier un Article</h4>
            <!-- titre  -->
                <input class="inp" type="text" value="<?php echo $row["titre"]; ?>"  name="titre" />  <br><br>
            <!-- date parution  -->
                <input class="inp" value="<?php echo $row["date_parution"]; ?>" type="date"  name="date_parution" /><br>
            <!-- Couverture -->
                <label class="lab" ><strong>Choisir photo de couverture:</strong></label>
                <input class="lab" value="<?php echo $row["couverture"]; ?>"  type="file"  name="couverture"><br>  <!-- accept="image/png, image/jpeg" -->
            <!-- Contenu -->
                <textarea type="text" value="<?php echo $row["contenu"]; ?>" name="contenu" rows="5" cols="33"></textarea><br>
            <!-- Public ? -->
                <label class="lab"><strong>Public</strong></label><br> 
                <input class="inp" type="radio" name="est_public" value="true" <?php echo ($row["est_public"] ? "checked" : "" ) ?> > 
                <label class="lab">Oui</label><br>
                <input class="inp" type="radio" name="est_public" value="false" <?php echo ($row["est_public"] ? "" : "checked" ) ?>>
                <label class="lab">Non</label>
            <!-- ID Auteur -->
                <input class="inp" value="<?php echo $row["auteur_id"]; ?>" type="text"  name="auteur_id" /><br>
                <button type="submit" class="button" name="ok" value="OK">Modifier</button>
            </div>
    </form>

    </div>
    </main>

    <?php 
       endwhile;
       $pdostmt->closeCursor();
    }
    ?>

<?php

    include_once("footer.php")
    
?>