On va ajouter une nouvelle page dans le projet toto : cities_students.php

Cette page va :
	- r�cup�rer dans l'url l'id ($_GET) d'une ville de la DB
	- r�cup�rer les informations sur cette ville (nom du pays inclus) (1 requ�te SQL)
	- r�cup�rer les noms, pr�noms, n�de session et lieu de formation de tous les students de cette ville (1 seconde requ�te SQL, sur plusieurs tables)
	- enfin, on affichera :
		* toutes les informations sur la ville
		* dans une <table>, tous les �tudiants, leur n� de session et leur lieu de formation (pas de pagination)
		
Au niveau "parcours utilisateur" (UX), un clic sur le nom d'une ville (sur la home ou dans list.php) am�nera sur cette nouvelle page.

Exemple d'URL :
http://localhost/projet_toto/cities_students.php?cityId=2

---------
En option
---------
- rendre le nom et pr�nom de chaque student cliquable. Le clic am�ne sur la page "d�tails" du student (la page d�tails est d�j� faite)