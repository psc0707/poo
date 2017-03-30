<?php

// FRONT CONTROLLER
require dirname(__FILE__).'/inc/config.php';

// Je récupère le paramètre d'URL "section" correspondant à la page demandée
//$section = isset($_GET['section']) ? trim($_GET['section']) : '';

/*if ($section == 'catalogue') {
    // J'inclus le controller "catalogue"
    require dirname(__FILE__).'/inc/controller/catalogue.php';
}
else if ($section == 'details') {
    // J'inclus le controller "details"
    require dirname(__FILE__).'/inc/controller/details.php';
}
else {
    // HOME

    
}*/

// Avec url rewriting
$path = isset($_GET['path']) ? trim($_GET['path']) : '';

if (substr($path, 0, 9) == 'catalogue' || substr($path, 0, 10) == 'catalogue/') {
    // Récupération de l'id, URL : catalogue/3
    $id = str_replace(array('catalogue/', 'catalogue'), '', $path);
    if (is_numeric($id)) {
        $_GET['cat_id'] = intval($id);
    }

    // J'inclus le controller "catalogue"
    require dirname(__FILE__).'/inc/controller/catalogue.php';
}
else if ($path == 'details' || $path == 'details/') {
    // J'inclus le controller "details"
    require dirname(__FILE__).'/inc/controller/details.php';
}
else {
    // J'inclus le controller "home"
    require dirname(__FILE__).'/inc/controller/home.php';
}