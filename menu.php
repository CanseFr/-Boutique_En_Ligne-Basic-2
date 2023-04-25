<?php 
require_once 'header.php';

?>

<nav class="nav">
    <div class="nav-main">
        <div class="logo">GESTION<span>BDD</span></div>
        <ul class="nav-links">
            <li class="nav-link"><a href="home.php">Home</a></li>

            <li class="nav-link dropdown"><a href="listAuteur.php" class="dropdown">Auteurs <i class="bi bi-chevron-compact-down"></i></a>
            <ul class="dropdown-list">
                <li class="nav-link"><a href="auteur.php">Ajouter</a>
                <li class="nav-link"><a href="listAuteur.php">Modifier</a>
                <li class="nav-link"><a href="listAuteur.php">Supprimer</a>
                <li class="nav-link"><a href="listAuteur.php">Lister</a>
            </ul>
            </li>

            <li class="nav-link dropdown"><a href="article_list.php" class="dropdown">Articles <i class="bi bi-chevron-compact-down"></i></a>
            <ul class="dropdown-list">
                <li class="nav-link"><a href="article_add.php">Ajouter</a>
                <li class="nav-link"><a href="article_list.php">Modifier</a>
                <li class="nav-link"><a href="article_list.php">Supprimer</a>
                <li class="nav-link"><a href="article_list.php">Lister</a>
            </ul>
            </li>

            <li class="nav-link"><a href="blog.php">Blog</a></li>
        </ul>
    </div>
        
    <div class="cta">
        <button class="btn btn-secondary">Appeler la Police</button>
        <button class="btn btn-primary">Appeler un Dealer</button>
    </div>
    <div class="menu">
        <button class="btn btn-primary menu"><i class="bi-list"></i></button>
        <ul class="nav-mobile">
            <li class="nav-link"><a href="">Home</a></li>
            <li class="nav-link"><a href="">Our Team</a></li>
            <li class="nav-link dropdown"><a href="" class="dropdown">Services <i class="bi bi-chevron-compact-down"></i></a>
            <ul class="dropdown-list">
                <li class="nav-link"><a href="">Service 1</a>
                <li class="nav-link"><a href="">Service 2</a>
            </ul>
            </li>
            <li class="nav-link"><a href="">Blog</a></li>
        </ul>
    </div>
</nav>
