# Objectif du workshop
 - Réaliser les opérations CRUD sur les articles et auteurs de la base de données proposée en utilisant le formulaire qui a été réalisé lors de la première partie du cours PHP. Jusqu'ici, nous n'avions qu'un formulaire permettant de "créer" un article et l'afficher si les données étaient validées.
- Inserez des données dans la tableau Auteur, puis insérez des données dans la table Article (à minima, un auteur et un article)
- Votre but est de faire en sorte de :
    - Créer la base de données (les tables sont sur slides)
    - Créer un article en base de données
    - Afficher un article provenant de la base de données
    - Afficher le nombre d'articles
    - Modifier les informations d'un article
    - Supprimer un article
- Chaque opération CRUD devrait être faite dans un fichier séparé idéalement
    - Voir require sur les slides pour pouvoir appeler la fonction d'une page php séparée

## Etapes du workshop
### Paramétrage de la connexion
- La première étape est de créer un fichier connexion.php qui permettra de paramétrer la connexion à la base de données (Ces éléments sont également présents sur les slides et nous les aurons vu ensemble également)
- Si la connexion réussi, ça doit afficher "Connexion réussie", sinon ça doit afficher "Echec de la connexion"

### Liens vers les pages
- Réaliser des liens vers les pages concernés afin d'avoir un sommaire des actions effectuables sur chacune des pages.
Par exemple : 
```
    <a href="auteur.php"> Ajouter un auteur </a> <br/>
    <a href="article_add.php"> Ajouter un article </a> <br/>
    <a href="article_upd.php"> Modifier un article </a> <br/>
    <a href="article_del.php"> Supprimer un article </a> <br/>
    <a href="article_list.php"> Lister les articles </a> <br/>
```

### Réalisation de la requête d'ajout d'un auteur en base de données
- Réalisez un formulaire POST contenant 
    - Nom
    - Prénom
    - Date de naissance
- Si possible réalisez les opérations de vérification des entrées utilisateur (Par exemple, Nom et Prénom doivent contenir au moins 5 caractères chacun et la date de naissance doit être inférieure à la date du jour)
- Réalisez une requête paramétrée pour insérer des données (Vous avez un exemple réutilisable pour cette requête mysqli_insert_prepared.php) Cette opération doit être réalisée dans un fichier séparé sous forme de fonction, par exemple ajout_auteur.php
- Cette requête doit retourner l'identifiant de l'élément inséré
- PS : Regardez comment utiliser require sur slides ou sur le pdf de la formation.
- Attention à ne pas importer deux fois le même fichier, par exemple connexion.php doit être importé dans le fichier ajout_auteur.php, mais pas dans le formulaire. (Sinon utilisez require_once)

### Réalisation de la requête d'ajout d'un article en base de données
- En partant du formulaire corrigé (ou le vôtre), faites en sortes de créer un article quand tous les champs sont validés. 
- Réalisez une requête paramétrée pour insérer des données (Vous avez un exemple réutilisable pour cette requête mysqli_insert_prepared.php, attention il est à adapter car ici nous insérons un auteur)
- Cette requête doit retourner l'identifiant de l'élément inséré et doit être effectué dans un fichier séparé sous forme de fonction

### Réalisation de la requête de récupération des articles
- Réalisez une page permettant d'afficher le nombre d'articles dans la base de données (requête de selection sur la table Article avec jointure sur la table Auteur). Vous avez également un exemple avec mysqli_read_prepared.php
- Affichez sur cette page également le contenu de tous les articles (sans les images).

### Réalisation de la requête de modification d'un article
- Cette requête doit permettre de modifier un article par son id (Idéalement, l'id est passé en paramètre $_GET, sinon vous pouvez également mettre un id en dur, existant dans la base de données)
- Pour se faire, le meilleur conseil que je peux donné serait de passer par la page qui affiche tous les articles et de construire vous même le lien qui permet d'aller vers la page de modification
- Cette requête fonctionne comme l'insertion, mais c'est un UPDATE, elle doit également retourner l'id de l'élément modifié.
- Celle ci doit également être réalisé dans un fichier séparé sous forme de fonction

### Réalisation de la requête de suppresion d'un article
- Cette requête doit permettre de supprimer un article par son id (Idéalement, l'id est passé en paramètre $_GET, sinon vous pouvez également mettre un id en dur, existant dans la base de données)
- Pour se faire, le meilleur conseil que je peux donné serait de passer par la page qui affiche tous les articles et de construire vous même le lien qui permet d'aller vers la page de suppression
- Cette requête fonctionne comme l'insertion, mais c'est un DELETE, elle doit également retourner l'id de l'élément supprimé.
- Celle ci doit également être réalisé dans un fichier séparé sous forme de fonction

## Difficulté
Ce workshop est intentionnellement plus difficile que les autres mais n'est pas noté, le but est que vous alliez le plus loin possible en TP et en cours (mercredi) et que je vous aide lorsque vous êtes bloqués.