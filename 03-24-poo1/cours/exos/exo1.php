<?php

// EXERCICE 1
/* -----------------------------------
a) créer un fichier pour la classe "VideoGame" dans le répertoire "inc"
*/
echo '<br>EXO 1-a<br>';
$step = '';
if (file_exists('inc/VideoGame.php')) {
	echo 'Fichier ok<br>';
	$step = 'a';
}
else {
	echo 'Il faut créer le fichier pour la classe VideoGame<br>';
}

/* -----------------------------------
b) écrire la classe "VideoGame" et l'inclure
*/
// VOTRE CODE ICI

require dirname(__FILE__).'/inc/VideoGame.php';

// FIN DE VOTRE CODE
if ($step == 'a') {
	echo '<br>EXO 1-b<br>';
	if (class_exists('VideoGame')) {
		echo 'Class VideoGame exists => OK<br>';
		$step = 'b';
	}
	else {
		echo 'Il faut écrire la classe VideoGame et l\'inclure dans ce fichier<br>';
	}
}

/* -----------------------------------
c) ajouter les propriétés title, releaseDate, editor, genre et console à la classe VideoGame
*/

if ($step == 'b') {
	echo '<br>EXO 1-c<br>';
	if (property_exists('VideoGame', 'title') && property_exists('VideoGame', 'releaseDate')
		&& property_exists('VideoGame', 'editor') && property_exists('VideoGame', 'genre')
		&& property_exists('VideoGame', 'console')) {
		echo 'Properties OK<br>';
		$step = 'c';
	}
	else {
		echo 'Il faut ajouter les propriétés dans la classe VideoGame<br>';
	}
}

/* -----------------------------------
d) créer une instance de VideoGame dans la variable $dayOfTentacle. Rechercher sur wikipedia les valeurs à donner pour ce jeu
*/
// VOTRE CODE ICI

$dayOfTentacle = new VideoGame(
	'Day of Tentacle',
	'1993-06-25',
	'LucasArts',
	'Adventure',
	VideoGame::CONSOLE_PC
);
print_r($dayOfTentacle);

// FIN DE VOTRE CODE

if ($step == 'c') {
	echo '<br>EXO 1-d<br>';
	if (isset($dayOfTentacle) && is_a($dayOfTentacle, 'VideoGame')
			&& !empty($dayOfTentacle->title) && !empty($dayOfTentacle->releaseDate)
			&& !empty($dayOfTentacle->editor) && !empty($dayOfTentacle->genre)
			&& !empty($dayOfTentacle->console)) {
		echo '$dayOfTentacle OK<br>';
		$step = 'd';
	}
	else {
		echo 'Il faut créer une instance de VideoGame dans $dayOfTentacle<br>';
	}
}

/* -----------------------------------
e) créer une instance de VideoGame dans la variable $themeHospital. Rechercher sur wikipedia les valeurs à donner pour ce jeu
*/
// VOTRE CODE ICI

$themeHospital = new VideoGame(
	'Theme Hospital',
	'1993-03-31',
	'Bullfrog',
	'Simulation',
	VideoGame::CONSOLE_PC
);

// FIN DE VOTRE CODE

if ($step == 'd') {
	echo '<br>EXO 1-e<br>';
	if (isset($themeHospital) && is_a($themeHospital, 'VideoGame')
			&& !empty($themeHospital->title) && !empty($themeHospital->releaseDate)
			&& !empty($themeHospital->editor) && !empty($themeHospital->genre)
			&& !empty($themeHospital->console)) {
		echo '$themeHospital OK<br>';
		$step = 'e';
	}
	else {
		echo 'Il faut créer une nouvelle instance de VideoGame dans $themeHospital<br>';
	}
}

/* -----------------------------------
f) créer une instance de VideoGame dans la variable $nbaJam. Rechercher sur wikipedia les valeurs à donner pour ce jeu
*/
// VOTRE CODE ICI

$nbaJam = new VideoGame(
	'NBA Jam',
	'1994-04-04',
	'Midway',
	'Sport',
	VideoGame::CONSOLE_MEGADRIVE
);
//echo VideoGame::CONSOLE_PS2;exit;

// FIN DE VOTRE CODE

if ($step == 'e') {
	echo '<br>EXO 1-f<br>';
	if (isset($nbaJam) && is_a($nbaJam, 'VideoGame')
			&& !empty($nbaJam->title) && !empty($nbaJam->releaseDate)
			&& !empty($nbaJam->editor) && !empty($nbaJam->genre)
			&& !empty($nbaJam->console)) {
		echo '$nbaJam OK<br>';
		$step = 'f';
	}
	else {
		echo 'Il faut créer une nouvelle instance de VideoGame dans $nbaJam<br>';
	}
}

/* Suite
g) Afficher/Modifier une propriété
- afficher la valeur d'une propriété de chaque instance
- modifier la valeur de cette propriété de chaque instance
- afficher à nouveau la valeur de cette propriété
*/

echo $dayOfTentacle->title.'<br>';
$dayOfTentacle->title = 'Day of Tentacule';
echo $dayOfTentacle->title.'<br>';

/*
h) déclaration de méthodes
- écrire la méthode retournant si un jeuvideo est sorti ou pas (si date de sortie est antérieur à aujourd'hui ou non)
- écrire la méthode permettant de sortir un jeuvideo (modifier la date de sortie à aujourd'hui)

EXERCICE++
- écrire les constantes dans la classe JeuVideo, pour définir les
	valeurs possibles pour les consoles
EXERCICE-extra
- écrire la classe Packaging avec les propriétés suivantes : couleur du boitier, nombre de DVD, avec ou sans notice, etc. (Attention, tout en anglais)
- ajouter la propriété "boitier" à classe JeuVideo qui sera une instance de l'objet Packaging
*/