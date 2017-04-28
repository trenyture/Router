<?php

	//Autoloader to charge all Classes
	function chargerClasse($classe){
		require 'class/' . $classe . '.php';
	}
	spl_autoload_register('chargerClasse');

	//GLOBALS VARIABLES
	$Title = null; //Title of the page
	$Model = null; // Model of the page => ! is required
	$Ctrl = null; // Controller of the page
	$View = null; // View of the page

	//Requiring the route list (wich include the router function)
	require 'elements/routes.php';

	//Including the model which will give us The Title, The Controller and The View
	include 'models/' . $Model;
	
	//include the controller if Exists
	if(!is_null($Ctrl)){
		include 'controllers/' . $Ctrl;
	}

	/************************************************
	************** DISPLAY CONTENT ******************
	************************************************/
	if(!is_null($View)){
		//including header
		include 'elements/header.php';
	
		//including the view
		include 'views/' . $View;

		//including footer
		include 'elements/footer.php';
	}
	
?>