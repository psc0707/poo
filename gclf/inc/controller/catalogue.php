<?php

// J'importe les classes nécessaires
use Inc\Model\Film;

$pageTitle = 'Catalogue';

// Page par défaut => 1
$currentPage = 1;
$searchTerms = '';
$categorieId = 0;
// On souhaite afficher 4 films par page
$nbFilmsParPage = 4;
$offsetPage = 0;
// Je récupère le paramètre d'URL "page" de type integer
if (isset($_GET['page'])) {
	$currentPage = intval($_GET['page']);
	$offsetPage = ($currentPage-1)*$nbFilmsParPage;
}

// Je récupère le paramètre d'URL "q"
if (isset($_GET['q'])) {
	$searchTerms = trim($_GET['q']);
}
// Je récupère le paramètre d'URL "cat_id"
if (isset($_GET['cat_id'])) {
	$categorieId = intval(trim($_GET['cat_id']));
}

// J'appelle la méthode du "model"
$filmList = Film::getList($offsetPage, $nbFilmsParPage, $categorieId, $searchTerms);

// J'appelle les vues
require 'inc/view/header.php';
require 'inc/view/catalogue.php';
require 'inc/view/footer.php';