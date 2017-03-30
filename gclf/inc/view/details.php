<?php if (sizeof($filmInfos) > 0) : ?>
<article id="details">
	<div class="detailsLeft">
		<div class="affiche"><img src="<?php echo $filmInfos['fil_affiche']; ?>" border="0" width="200" /></div>
		<div class="annee">Sortie en <?php echo $filmInfos['fil_annee']; ?></div>
		<div class="support">Support : <?php echo $filmInfos['sup_nom']; ?></div>
	</div>
	<div class="detailsRight">
		<div class="titre"><?php echo $filmInfos['fil_titre']; ?></div>
		<div class="categorie"><?php echo $filmInfos['cat_nom']; ?></div>
		<br /><br />
		<div class="synopsis"><?php echo $filmInfos['fil_synopsis']; ?></div>
		<div class="acteurs"><?php echo $filmInfos['fil_acteurs']; ?></div>
		<div class="fichier">=> <?php echo $filmInfos['fil_filename']; ?></div>
	</div>
</article>
<?php else : ?>
	echo 'ID non reconnu<br />';
<?php endif; ?>