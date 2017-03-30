Dans le projet en �quipe "Gestion des copies l�gales de films" ou "ImDB", nous avons 2 formulaires :
	- ajout/modification d'une cat�gorie
	- ajout/modification d'un film
	
1) Modifier le formulaire de cat�gorie pour que tout se fasse en Ajax
	* intercepter la soumission du formulaire
	* serializer les donn�es du formulaire pour les envoyer en Ajax sur le fichier "ajax/categories.php"
	* dans ce nouveau fichier, placer le traitement des donn�es en POST et ins�rer ou modifier en DB (reprendre le code existant)
	* la r�ponse du fichier "ajax/categories.php" sera l'id si tout a fonctionn�, 0 sinon
	* apr�s la r�ponse du fichier "ajax/categories.php", c�t� javascript, afficher une alerte pour informer l'utilisateur
	* dans le cas d'une insertion :
		** soit rediriger sur la page avec le bon ID => ?id=42
		** soit donner une valeur � l'input hidden correspondant � l'ID
		
2) Faire de m�me avec le formulaire d'ajout/modification de film

---------
En option
---------
3) Faire de m�me avec 1 ou 2 formulaires du projet "projobjects"