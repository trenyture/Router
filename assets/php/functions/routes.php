<?php
	
	//Requiring the router module
	require $phpPath . 'functions/router.php';

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
	if($result == false){
		header('location:404.html');
	}else{
		$model = 'home.php';
		if ($result['model'] != null ) {
			$model = $result['model'];
		}
		if (isset($result['param'])){
			$paramUrl = $result['param']; //The param of the URL (example ID);
		}
	}

?>