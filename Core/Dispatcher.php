<?php
define('DEFAULT_CONTROLLER_NAME', 'main');
class Dispatcher{

	var $request;
	
	function __construct(){
		$this->request = new Request();
		
		Router::parse($this->request->url, $this->request);
		//print_r($this->request);

		if($this->request->controller=='')
				$this->request->controller=DEFAULT_CONTROLLER_NAME;
		$controller=$this->loadController();
		//echo 'action = '.$this->request->action;

		//&& in_array($this->request->action, get_class_methods($controller))
		if($controller==null){
			$controller=$this->defaultController();
		}
/*		echo '<hr/>';
		print_r($controller);
		echo '<hr/>';*/

		call_user_func(array($controller, 'view'), array($this->request->action, $this->request->params));
	}

	function loadController(){
		/*if($this->request->controller=='')
				$this->request->controller=DEFAULT_CONTROLLER_NAME;*/

		$name=ucfirst($this->request->controller).'Controller';		
		$file=ROOT.DS.'Controller'.DS.$name.'.php';
						
		if(file_exists($file)){
			require $file;
			return new $name($this->request);
		}else{
			return null;
		}	
	}
	function defaultController(){
		$this->request->action = $this->request->controller;
		$this->request->controller = DEFAULT_CONTROLLER_NAME;

		/*$name=ucfirst($this->request->controller).'Controller';
		$file=ROOT.DS.'Controller'.DS.$name.'.php';

		require $file;
		return new $name($this->request);*/
		return $this->loadController();
	}
}
?>
