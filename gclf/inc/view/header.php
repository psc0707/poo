<html>
<head>
	<title>GCLF - <?php echo $pageTitle; ?></title>
	<link href="<?= __BASE_URL__ ?>css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<div class="links">
			<a href="<?= __BASE_URL__ ?>">Accueil</a>&nbsp;&nbsp;
			<a href="<?= __BASE_URL__ ?>form_categorie.php">Gérer les catégories</a>&nbsp;&nbsp;
			<a href="<?= __BASE_URL__ ?>form_film.php">Ajouter un film</a>&nbsp;&nbsp;
		</div>
		<div class="search">
			<form action="<?= __BASE_URL__ ?>catalogue/" method="get" id="headerSearch">
				<input type="text" class="searchInput" placeholder="Titre, acteur, etc." name="q" value="" />
				<input type="submit" class="searchSubmit" value="Rechercher"/>
			</form>
		</div>
		<div class="clearer"></div>
	</header>