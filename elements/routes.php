<?php

	$router = new Router();

	/**Make the URL list of the site
	* $router->add(PATH,MODEL);
	*	PATH = String || MODEL == Name of the MODEL to look for (if == NULL -> Home )
	*/
	$router->add('/','home.php');
	$router->add('/posts','posts.php');
	$router->add('/post/:id','post.php');
	$router->add('/profile/:name');
	$router->add('/contact');

	//Run The Module
	$result = $router->run();
	
	//Return the Result
	$Model = 'home.php';
	if (!is_null($result['model'])) {
		$Model = $result['model'];
	}
	if (isset($result['param'])){
		$paramUrl = $result['param']; //The param of the URL (example ID);
	}

?>