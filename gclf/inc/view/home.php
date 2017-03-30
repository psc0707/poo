<section>
	<p id="homeItro">GCLF est une superbe et ingénieuse application permettant de gérer la localisation et la recherche de ses copies légales de films</p>
	<br /><br />
	<form action="<?= __BASE_URL__ ?>catalogue/" method="get" id="homeSearch">
		<input type="text" class="searchInput" placeholder="Titre, acteur, etc." name="q" value="" />
		<input type="submit" class="searchSubmit" value="Rechercher"/>
	</form>
</section>
<section class="listeCategories">
	<?php foreach ($categorieList as $curCategorieInfos) : ?>
	<a href="<?= __BASE_URL__ ?>catalogue/<?php echo $curCategorieInfos['cat_id']; ?>"><?php echo $curCategorieInfos['cat_nom'].' ('.$curCategorieInfos['nb'].')'; ?></a>&nbsp; &nbsp;
	<?php endforeach; ?>
</section>