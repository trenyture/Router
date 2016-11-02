<?php
	//On appelle la fonction Router et on l'instancie
	require $phpPath . 'functions/router.php';
	$route = new Router();

	//On créé la liste de toutes les routes possibles
	$route->add('/', 'index', 'Votre lecteur de Vidéos!');
	$route->add('/watch');
	$route->add('/contact');
	
	//On fait tourner la machine (On exécute la fonction) qui nous renvoie l'adresse du modèle
	$modelUsed = $route->run();
?>