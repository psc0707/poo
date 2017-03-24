<pre><?php

// J'inclue le fichier de la Classe Car
require dirname(__FILE__).'/inc/Car.php';
// J'inclue le fichier de la Classe Moteur
require dirname(__FILE__).'/inc/Moteur.php';

// J'instancie ma classe Car
$fiesta = new Car();
$fiesta = new Car;
// Je modifie les propriétés marque et modèle de mon Objet
$fiesta->setBrand('Ford');
$fiesta->model = 'Fiesta';
$fiesta->paint('rose');
//$fiesta->setColor('jaune'); // Error car private
print_r($fiesta);

$moteurFerrari = new Moteur(
	'Ferrari',
	'F120D',
	'Essence',
	352,
	8,
	2936
);
$f40 = new Car(
	$moteurFerrari,
	'SFGh2465465DSFGHD',
	'DF 7896',
	'rouge',
	'Ferrari',
	'F40',
	2
);
//$f40->moteur = 'momo'; // ce n'est pas le bon type

print_r($f40);

//echo $f40->brand.'<br>'; // Error :: private property
echo $f40->getBrand().'<br>'; // OK

echo 'Ma F40 a '.$f40->moteur->getHp().' ch (hp)<br>';
getHp();

?></pre>