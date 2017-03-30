<?php

// J'importe la classe
use Inc\Model\Categorie;

// J'appelle la méthode du "model" de MVC
$categorieList = Categorie::getCategoriesForHome();

// J'inclus les vues de "view" de MVC
require 'inc/view/header.php';
require 'inc/view/home.php';
require 'inc/view/footer.php';