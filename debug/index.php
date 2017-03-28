<?php

require dirname(__FILE__).'\connexion.php';

$teamList=array();
$triField=isset($_GET['tri_field'])?trim($_GET['tri_field']):'';
$triSens=isset($_GET['tri_sens'])?$_GET['tri_sens']:'';
$searchTerms=isset($_GET['q'])?trim($_GET['q']):'';
$sql = '
SELECT *, team.id AS teamid
FROM team
INNER JOIN division ON division.id = team.div_id
INNER JOIN conference ON conference.id = division.con_id
';
if (!empty($searchTerms)) {
	$sql .= ' WHERE tea_name LIKE :searchTerms';
}

if (!empty($triField) && !empty($triSens)) {							
	$sql .= ' ORDER BY '.$triField.' '.$triSens;
}

// print_r($sql);
$pdoStatement = $pdo->prepare($sql);

if (!empty($searchTerms)) {
		$pdoStatement->bindValue(':searchTerms', '%'.$searchTerms.'%');
		// print_r($pdoStatement);
}
// echo '<pre>';
// $pdoStatement->debugDumpParams();
// echo '</pre>';
// if ($pdoStatement->execute() === false) {
// 		print_r($pdoStatement->errorInfo());
// 	} else {

if ($pdoStatement->execute() && $pdoStatement->rowCount() > 0) {
	$teamList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
		// print_r($teamList);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>NBA teams</title>
	<style type="text/css">
		HTML, BODY {
			font-family: Tahoma, Verdana, sans-serif;
		}
		.container {
			max-width: 800px;
			margin : auto;
		}
		TABLE {
			width: 100%;
		}
		THEAD TD {
			font-size: 1.2em;
		}
	</style>
</head>
<body>
	<div class="container">
		<header>
			<h1>NBA teams</h1>
		</header>

		<section>
			<form action="" method="get">
				<legend>Filtrer et trier</legend>
				<fieldset>
					<select name="tri_field">
						<option value="">trier par</option>
						<option value="teamid"<?= $triField == 'teamid' ? ' selected="selected"' : '' ?>>ID</option>
						<option value="tea_ville"<?= $triField == 'tea_ville' ? ' selected="selected"' : '' ?>>Ville</option>
						<option value="tea_name"<?= $triField == 'tea_name' ? ' selected="selected"' : '' ?>>Nom</option>
						<option value="div_name"<?= $triField == 'div_name' ? ' selected="selected"' : '' ?>>Division</option>
						<option value="con_name"<?= $triField == 'con_name' ? ' selected="selected"' : '' ?>>Conférence</option>
					</select>
					<select name="tri_sens">
						<option value="ASC">ASC</option>
						<option value="DESC"<?= $triSens == 'DESC' ? ' selected="selected"' : '' ?>>DESC</option>
					</select>
					<input type="text" name="q" value="<?php echo $searchTerms; ?>" placeholder="Rechercher..." />
					<input type="submit" value="OK" />
					&nbsp;&nbsp;&nbsp;<?= count($teamList); ?> résultat(s)
				</fieldset>
			</form>
			<!-- <br /> -->
		</section>

		<section>

			<table cellspacing="0" cellpadding="2" border="0">
			<thead>
				<td></td>
				<td>Ville</td>
				<td>Nom</td>
				<td>Division</td>
				<td>Conférence</td>
			</thead>
			<tbody>
				
				<?php foreach ($teamList as $currentTeamInfos) :?>
					<tr>
						<td>#<?php echo $currentTeamInfos['id']; ?></td>
						<td><?php echo $currentTeamInfos['tea_ville']; ?></td>
						<td><?= $currentTeamInfos['tea_name']; ?></td>
						<td><?= $currentTeamInfos['div_name']; ?></td>
						<td><?= $currentTeamInfos['con_name']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			</table>
			
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
