<?php
// EXERCICE 4
/* -----------------------------------
a) Dans un fichier à part, écrire un formulaire pointant sur ce fichier exo3.php. Il devra envoyer en POST les champs suivants, dans l'ordre :
	- lname
	- fname
*/
echo '<br>EXO 1-a<br>';
$sendPost = array();
if (!empty($_POST)) {
	$sendPost = array_keys($_POST);
}
$aOk = checkVariableValue(array('sendPost'=>array(
	'lname',
	'fname'
)), false);

/* -----------------------------------
b) Récupérer les valeurs des champs "lname" et "fname" dans les variables "lastName" et "firstName" (à créer)
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($aOk) && $aOk) {
	echo '<br>EXO 1-b<br>';
	$bOk = checkVariableValue(array('lastName'=>$_POST[$sendPost[0]], 'firstName'=>$_POST[$sendPost[1]]), false);
}

/* -----------------------------------
c)	- Créer une variable "getData", et lui donner la valeur "Mon nom est NOM, et mon prénom est PRENOM" où NOM et PRENOM sont les données envoyées en POST
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if (isset($bOk) && $bOk) {
	echo '<br>EXO 1-c<br>';
	$cOk = checkVariableValue(array('getData'=>"Mon nom est {$_POST[$sendPost[0]]}, et mon prénom est {$_POST[$sendPost[1]]}"), false);
}

function checkVariableValue($variableList, $displayDebug=true) {
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
					$diff = array_diff_assoc_recursive($expectedValue, $var);
					if (is_array($diff) && sizeof($diff) > 0) {
						if ($displayDebug) {
							echo '<pre>VARIABLE '.$varName.' = ';
							var_dump($var);
							echo '</pre>';
							echo '<pre>Différence : ';
							print_r($diff);
							echo '</pre>';
						}
						$retour = $retour && false;
					}
					else {
						$diff2 = array_diff_assoc_recursive($var, $expectedValue);
						if (is_array($diff2) && sizeof($diff2) > 0) {
							if ($displayDebug) {
								echo '<pre>VARIABLE '.$varName.' = ';
								var_dump($var);
								echo '</pre>';
								echo '<pre>Différence : ';
								print_r($diff2);
								echo '</pre>';
							}
							$retour = $retour && false;
						}
						else {
							echo '<strong>'.$varName.' OK</strong><br />';
						}
					}
				}
				else {
					if ($var === $expectedValue) {
						echo '<strong>'.$varName.' OK</strong><br />';
					}
					else {
						if ($displayDebug) {
							echo '<pre>VARIABLE '.$varName.' = ';
							var_dump($var);
							echo '</pre>';
						}
						$retour = $retour && false;
					}
				}
				if (!$displayDebug && !$retour) {
					echo 'nein :(<br>';
				}
			}
		}
	}
	return $retour;
}
function array_diff_assoc_recursive($array1, $array2) {
    $difference=array();
    foreach($array1 as $key => $value) {
        if( is_array($value) ) {
            if( !isset($array2[$key]) || !is_array($array2[$key]) ) {
                $difference[$key] = $value;
            } else {
                $new_diff = array_diff_assoc_recursive($value, $array2[$key]);
                if( !empty($new_diff) )
                    $difference[$key] = $new_diff;
            }
        }
	else {
		if( !array_key_exists($key,$array2) || $array2[$key] !== $value ) {
			$difference[$key] = $value;
		}
        }
    }
    return $difference;
}