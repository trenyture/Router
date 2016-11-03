<?php

	class Router{

		private $urls = array();
		private $models = array();
		private $result = array();

		public function add($url, $model = null){
			$nUrl = '/'.trim($url,'/');
			$this->urls[] = $nUrl;
			$this->models[$nUrl] = $model;
		}

		public function run(){
			$true = 0;
			$here = isset($_GET['url']) ? '/'.trim($_GET['url'],'/') : '/';
			foreach ($this->urls as $url) {
				$path = preg_replace('#:([\w]+)#', '([^/]+)', $url);
				$regex = "#^$path$#i";
				if(preg_match($regex, $here, $matchs)){
					array_shift($matchs);
					$true = 1;
					$this->result['model'] = $this->models[$url];
					if(sizeof($matchs) != 0){
						$this->result['param'] = $matchs[0];
					}
					return $this->result;
					break;
				}
			}
			if ($true == 0) {
				return false;
			}
		}
	}

?>