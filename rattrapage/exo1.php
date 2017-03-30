<?php
// EXERCICE 2
/* -----------------------------------
a)	- Créer une variable "nbFighters" et lui donner comme valeur, le nombre d'élément du tableau $bestFighters
	- Créer une variable "quatriemeExists" de type booléen, et lui donner comme valeur true si la variable $quatriemeElement existe
*/
$bestFighters = array('SanGoku', 'Vegeta', 'Goldorak', 'Yoda', 'Saint Seiya', 'Nicky Larson');
// VOTRE CODE ICI



// FIN DE VOTRE CODE
echo '<br>EXO 2-a<br>';
$aOk = checkVariableValue(array('nbFighters'=>6, 'quatriemeExists'=>false));

/* -----------------------------------
b) Créer une variable "quatriemeElement", et lui donner comme valeur la valeur du 4e élément du tableau $bestFighters
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($aOk) && $aOk) {
	echo '<br>EXO 2-b<br>';
	$bOk = checkVariableValue(array('quatriemeElement'=>'Yoda'));
}

/* -----------------------------------
c)	- Créer une variable "index4exists" de type booléen, et lui donner "vrai" si l'index 4 existe dans le tableau $bestFighters, et n'est pas vide
	- Modifier la variable "quatriemeExists" de type booléen, et lui donner comme valeur true si la variable $quatriemeElement existe
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($bOk) && $bOk) {
	echo '<br>EXO 2-c<br>';
	$cOk = checkVariableValue(array('index4exists'=>true, 'quatriemeExists'=>true));
}


/* -----------------------------------
d) Créer une variable "index2length" de type integer, et lui donner comme valeur le nombre de caractères de la valeur de l'index 2 du tableau $bestFighters
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($cOk) && $cOk) {
	echo '<br>EXO 2-d<br>';
	$dOk = checkVariableValue(array('index2length'=>8));
}


/* EXERCICE ++
-----------------------------------
e) Créer une variable "decemberDays" de type tableau, et le remplir par tous les jours (1 par élément) du mois de décembre 2015
	au format Anglais (2015-12-18) par ordre décroissant (on commencera à 31 par défaut)
	- Attention 2015-12-01 et non 2015-12-1
	- Attention il n'y a pas de type "Date" en PHP
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($dOk) && $dOk) {
	echo '<br>EXO 2++<br>';
	$eOk = checkVariableValue(array('decemberDays'=>array('2015-12-31','2015-12-30','2015-12-29','2015-12-28','2015-12-27','2015-12-26','2015-12-25','2015-12-24','2015-12-23','2015-12-22','2015-12-21','2015-12-20','2015-12-19','2015-12-18','2015-12-17','2015-12-16','2015-12-15','2015-12-14','2015-12-13','2015-12-12','2015-12-11','2015-12-10','2015-12-09','2015-12-08','2015-12-07','2015-12-06','2015-12-05','2015-12-04','2015-12-03','2015-12-02','2015-12-01')));
}


/* EXERCICE-extra
-----------------------------------
f) Refaire l'exercice++ mais en utilisant un timestamp ou la classe DateTime
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($eOk) && $eOk) {
	echo '<br>EXO 2++<br>';
	$fOk = checkVariableValue(array('decemberDays'=>array('2015-12-31','2015-12-30','2015-12-29','2015-12-28','2015-12-27','2015-12-26','2015-12-25','2015-12-24','2015-12-23','2015-12-22','2015-12-21','2015-12-20','2015-12-19','2015-12-18','2015-12-17','2015-12-16','2015-12-15','2015-12-14','2015-12-13','2015-12-12','2015-12-11','2015-12-10','2015-12-09','2015-12-08','2015-12-07','2015-12-06','2015-12-05','2015-12-04','2015-12-03','2015-12-02','2015-12-01')));
}




function checkVariableValue($variableList) {
	$retour = true;
	if (is_array($variableList)) {
		foreach ($variableList as $varName=>$expectedValue) {
			if (!array_key_exists($varName, $GLOBALS)) {
				echo 'A toi de jouer...<br>';
				$retour = $retour && false;
			}
			else {
				$var = $GLOBALS[$varName];
				if (is_array($expectedValue)) {
					$diff = array_diff_assoc($expectedValue, $var);
					if (is_array($diff) && sizeof($diff) > 0) {
						echo '<pre>VARIABLE '.$varName.' = ';
						var_dump($var);
						echo '</pre>';
						echo '<pre>Différence : ';
						print_r($diff);
						echo '</pre>';
						$retour = $retour && false;
					}
					else {
						echo '<strong>'.$varName.' OK</strong><br />';
					}
				}
				else {
						if ($var === $expectedValue) {
						echo '<strong>'.$varName.' OK</strong><br />';
					}
					else {
						echo '<pre>VARIABLE '.$varName.' = ';
						var_dump($var);
						echo '</pre>';
						$retour = $retour && false;
					}
				}
			}
		}
	}
	return $retour;
}