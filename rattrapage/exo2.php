<?php
// EXERCICE 1
/* -----------------------------------
a) A l'aide d'une boucle for, créer un tableau "yearList", avec, pour chaque élément, toutes les années depuis 1983 à 2016.
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
echo '<br>EXO 1-a<br>';
$aOk = checkVariableValue(array('yearList'=>array(1983,1984,1985,1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016)));

/* -----------------------------------
b) Comme a), mais à l'aide d'une boucle while ou do/while, et dans la variable "yearList2"
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($aOk) && $aOk) {
	echo '<br>EXO 1-b<br>';
	$bOk = checkVariableValue(array('yearList2'=>array(1983,1984,1985,1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016)));
}
/* -----------------------------------
c) Ajouter dans le tableau "windowsRecents", les valeurs du tableau "windowsList" dont la clé est supérieure ou égale à 4
*/
$windowsList = array('3.11', '95', '98', 'Millenium', 'XP', 'Vista', '7', '8', '10');
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($bOk) && $bOk) {
	echo '<br>EXO 1-c<br>';
	$cOk = checkVariableValue(array('windowsRecents'=>array('XP', 'Vista', '7', '8', '10')));
}

/*
-----------------------------------
d) refaire l'exercice 1-a, mais de 2016 à 1983, et dans la variable "reverseYearList"
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($cOk) && $cOk) {
	echo '<br>EXO 1-d<br>';
	$result = array(1983,1984,1985,1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016);
	rsort($result);
	$dOk = checkVariableValue(array('reverseYearList'=>$result));
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