<?php

// EXERCICE 2
/* -----------------------------------
On veut faire une copie de la classe VideoGame, dans la classe VideoGameBis. Par contre, les propri�t�s de VideoGameBis seront priv�es.

a) copier le fichier "VideoGame" en "VideoGameBis" (classe VideoGameBis) dans le r�pertoire "inc"
*/
echo '<br>EXO 1-a<br>';
$step = '';
if (file_exists('inc/VideoGameBis.php')) {
	echo 'Fichier ok<br>';
	$step = 'a';
}
else {
	echo 'Il faut cr�er le fichier pour la classe VideoGameBis<br>';
}

/* -----------------------------------
b) dans VideoGameBis.php, mettre le bon nom de classe et inclure ce fichier
*/
// VOTRE CODE ICI

require dirname(__FILE__).'/inc/VideoGameBis.php';

// FIN DE VOTRE CODE
if ($step == 'a') {
	echo '<br>EXO 1-b<br>';
	if (class_exists('VideoGameBis')) {
		echo 'Class VideoGameBis exists => OK<br>';
		$step = 'b';
	}
	else {
		echo 'Il faut �crire la classe VideoGameBis et l\'inclure dans ce fichier<br>';
	}
}

/* -----------------------------------
c) mettre toutes les propri�t�s en priv�
*/
if ($step == 'b') {
	echo '<br>EXO 1-c<br>';
	$reflect = new ReflectionClass('VideoGameBis');
	$properties = $reflect->getProperties();
	$allPrivate = true;
	foreach ($properties as $currentProperty) {
		if (!$currentProperty->isPrivate()) {
			$allPrivate = false;
			echo 'Property "'.$currentProperty->getName().'" has incorrect visibility<br>';
		}
	}
	if ($allPrivate) {
		echo 'Properties OK<br>';
		$step = 'c';
	}
}

/* -----------------------------------
d) ajouter les getters et les setters
*/
if ($step == 'c') {
	echo '<br>EXO 1-d<br>';
	$reflect = new ReflectionClass('VideoGameBis');
	if ($reflect->hasMethod('getTitle') && $reflect->hasMethod('setTitle')
		&& $reflect->hasMethod('getEditor') && $reflect->hasMethod('setEditor')
		&& $reflect->hasMethod('getReleaseDate') && $reflect->hasMethod('setReleaseDate')
		&& $reflect->hasMethod('getGenre') && $reflect->hasMethod('setGenre')
		&& $reflect->hasMethod('getConsole') && $reflect->hasMethod('setConsole')) {
		echo 'Getters/Setters OK<br>';
		$step = 'd';
	}
	else {
		echo 'Il faut d�clarer les getters & setters<br>';
	}
}

/* Suite
e) Afficher/Modifier une propri�t�
- afficher la valeur d'une propri�t� de chaque instance
- modifier la valeur de cette propri�t� de chaque instance
- afficher � nouveau la valeur de cette propri�t�
*/
$dayOfTentacle = new VideoGameBis(
	'Day of Tentacle',
	'1993-06-25',
	'LucasArts',
	'Adventure',
	VideoGameBis::CONSOLE_PC,
	8.6
);

echo $dayOfTentacle->getTitle().'<br>';
$dayOfTentacle->setTitle('Day of Tentacule');
echo $dayOfTentacle->getTitle().'<br>';
echo 'Prix HT : '.$dayOfTentacle->getPrice().'<br>';
echo 'Prix TTC : '.$dayOfTentacle->getPriceVatIncluded().'<br>';

/*
EXERCICE++
---------------
- ajouter la propri�t� "prix"
- �crire la constante d�finissant le taux de TVA
- �crire la m�thode getPriceVatIncluded qui renvoie le prix avec la TVA

EXERCICE-extra
---------------
- pour les feignants, voir comment faire les getter & setters avec 2 m�thodes/fonctions magiques
- �crire la m�thode getPromoPrice ($pourcentagePromotion) qui renvoie le prix promotionnel du jeu vid�o (ajouter la propri�t� prix/price � la classe)
- s�rializer (serialize()) les instances dans des fichiers texte (utiliser les m�thodes magiques __sleep et __wakeup dans les classes � serializer) puis d�s�srializer (unserialize()) le contenu des fichiers texte et v�rifier que les objets sont correspondents aux premiers
*/