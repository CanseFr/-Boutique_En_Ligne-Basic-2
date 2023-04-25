
<?php

    require_once 'config.php';

    if(!empty($_POST)){
        $query = "UPDATE auteurs SET  nom=:nom, prenom=:prenom, date_naissance=:date_naissance WHERE id=:id";
        $pdostmt = $bdd->prepare($query);
        $pdostmt->execute( [
                            "id"=>$_GET["id"], 
                            "nom"=>$_POST["nom"], 
                            "prenom"=>$_POST["prenom"],
                            "date_naissance"=>$_POST["date_naissance"]
                                                            ]);
        header("Location:listAuteur.php");
        }

    if(!empty($_GET["id"])){

    //echo $_GET["id"];

        $query = "SELECT * FROM auteurs WHERE id=:id";
        $pdostmt = $bdd->prepare($query);
        $pdostmt->execute(["id"=>$_GET["id"]]);
        while($row=$pdostmt->fetch(PDO::FETCH_ASSOC)):
 
     ?>

    <!--Formulaire-->
    <form class="centreInputHigh"  method='post'>
                <h4>Modifier un Auteur</h4>
                <input class="inp" type='text' value="<?php echo $row["nom"]; ?>" name='nom'/>. <br>
                <input class="inp" type='text' value="<?php echo $row["prenom"]; ?>" name='prenom'/>. <br>
                <input class="inp" type='date' value="<?php echo $row["date_naissance"]; ?>"  name='date_naissance'/> <br>
                <button type='submit' class="button" name='ok' value='OK'>Modifier</button>
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