<?php
	//GLOBALS VARIABLES
	$phpPath = 'assets/php/'; //Where are all the php files
	$pageTitle = null; //Title of the page

	//Requiring the route list (wich include the router function)
	require $phpPath . 'functions/routes.php';

	//Including the model which will give us The Title, The Controller and The View
	include $phpPath . 'elements/models/' . $model;
	
	//include the controller if Exists
	if(isset($ctrl)){
		include $phpPath . 'elements/controllers/' . $ctrl;
	}

	/************************************************
	************** DISPLAY CONTENT ******************
	************************************************/
	//including header
	include $phpPath . 'elements/header.php';
	
	//including the view if exists
	if(isset($view)){
		include $phpPath . 'elements/views/' . $view;
	}

	//including footer
	include $phpPath . 'elements/footer.php';
	
?>