<?php 

require_once 'config.php';

?>
<title>Ajout Auteur</title>
<form class="centreInputHigh" action="auteurTraitement.php"  method='post'>
                <h4>Ajouter un Auteur</h4>
                <input class="inp" type='text' placeholder='Nom' name='nom'/>. <br>
                <input class="inp" type='text' placeholder='Prenom' name='prenom'/>. <br>
                <input class="inp" type='date'  name='dateN'/> <br>
                <button type='submit' class="button" name='ok' value='OK'>OK</button>
</form>