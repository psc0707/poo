<?php

// EXERCICE 1
/* -----------------------------------
a) cr�er un fichier pour la classe "VideoGame" dans le r�pertoire "inc"
*/
echo '<br>EXO 1-a<br>';
$step = '';
if (file_exists('inc/VideoGame.php')) {
	echo 'Fichier ok<br>';
	$step = 'a';
}
else {
	echo 'Il faut cr�er le fichier pour la classe VideoGame<br>';
}

/* -----------------------------------
b) �crire la classe "VideoGame" et l'inclure
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
		echo 'Il faut �crire la classe VideoGame et l\'inclure dans ce fichier<br>';
	}
}

/* -----------------------------------
c) ajouter les propri�t�s title, releaseDate, editor, genre et console � la classe VideoGame
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
		echo 'Il faut ajouter les propri�t�s dans la classe VideoGame<br>';
	}
}

/* -----------------------------------
d) cr�er une instance de VideoGame dans la variable $dayOfTentacle. Rechercher sur wikipedia les valeurs � donner pour ce jeu
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
		echo 'Il faut cr�er une instance de VideoGame dans $dayOfTentacle<br>';
	}
}

/* -----------------------------------
e) cr�er une instance de VideoGame dans la variable $themeHospital. Rechercher sur wikipedia les valeurs � donner pour ce jeu
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
		echo 'Il faut cr�er une nouvelle instance de VideoGame dans $themeHospital<br>';
	}
}

/* -----------------------------------
f) cr�er une instance de VideoGame dans la variable $nbaJam. Rechercher sur wikipedia les valeurs � donner pour ce jeu
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
		echo 'Il faut cr�er une nouvelle instance de VideoGame dans $nbaJam<br>';
	}
}

/* Suite
g) Afficher/Modifier une propri�t�
- afficher la valeur d'une propri�t� de chaque instance
- modifier la valeur de cette propri�t� de chaque instance
- afficher � nouveau la valeur de cette propri�t�
*/

echo $dayOfTentacle->title.'<br>';
$dayOfTentacle->title = 'Day of Tentacule';
echo $dayOfTentacle->title.'<br>';

/*
h) d�claration de m�thodes
- �crire la m�thode retournant si un jeuvideo est sorti ou pas (si date de sortie est ant�rieur � aujourd'hui ou non)
- �crire la m�thode permettant de sortir un jeuvideo (modifier la date de sortie � aujourd'hui)

EXERCICE++
- �crire les constantes dans la classe JeuVideo, pour d�finir les
	valeurs possibles pour les consoles
EXERCICE-extra
- �crire la classe Packaging avec les propri�t�s suivantes : couleur du boitier, nombre de DVD, avec ou sans notice, etc. (Attention, tout en anglais)
- ajouter la propri�t� "boitier" � classe JeuVideo qui sera une instance de l'objet Packaging
*/