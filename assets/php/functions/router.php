<?php
	
class Router
{

	private $url = array();
	private $ctrl = array();
	private $title = array();

	/**
	 *On crée un tableau de toutes les urls passées
	 *@param type $url and $ctrl
	 * USE : $router->add('/myUrl/','myController');
	 */
	public function add($url, $ctrl = null, $title = null){
		$this->url[] = $url;
		$this->ctrl[$url] = $ctrl;
	}

	/**
	 *On créé le moteur de la fonction qui va tester l'URL avec celles définies
	 *@param type $_GET['url'] vient du htaccess
	 */
	public function run(){
		$address = isset($_GET['url']) ? '/'.$_GET['url'] : '/';
		foreach ($this->url as $key => $value) {
			if(preg_match("#^$value$#", $address)){
				if ($this->ctrl[$value] != null) {
					return $var = 'models/'.$this->ctrl[$value].'.php';
				}else{
					return $var = 'models/index.php'; // -> Si le controller n'est pas défini on renvoit à l'index
				}
			}
		}
	}
}

?>