<?php

// J'importe la classe
use Inc\Model\Film;

$currentId = 0;
$filmInfos = array();
// Je récupère le paramètre d'URL "page" de type integer
if (isset($_GET['id'])) {
	$currentId = intval($_GET['id']);
}

// J'appelle la méthode du "model" de MVC
$filmInfos = Film::getInfos($currentId);
      
// J'inclus les vues de "view" de MVC
require 'inc/view/header.php';
require 'inc/view/details.php';
require 'inc/view/footer.php';