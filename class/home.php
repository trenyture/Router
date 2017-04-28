<?php 

class Home{
	
	private $_message;

	public function __construct(array $donnees){
		$this->_hydrate($donnees);
		$this->type = strtolower(static::class);
	}

	private function _hydrate($datas){
		foreach ($datas as $key => $value) {
			$method = 'set' . ucfirst($key);
			if (method_exists($this, $method)) {
				$this->$method($value);
			}
		}
	}

	public function getMessage(){
		return $this->_message;
	}

	public function setMessage($message){
		$this->_message = $message;
	}

}