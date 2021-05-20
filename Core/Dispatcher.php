<?php
class Dispatcher{
	var $request;
	
	function __construct(){
		$this->request= new Request();
		
		Router::parse($this->request->url, $this->request);
		$controller=$this->loadController();
		//&& in_array($this->request->action, get_class_methods($controller))
		if($controller==null){
			$controller=$this->defaultController();
		}
		call_user_func(array($controller, 'view'), array($this->request->action, $this->request->params));
	}
	function loadController(){
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
		$name='Controller';		
		$file=CORE.DS.$name.'.php';
						
		//require $file;
		return new $name($this->request);
	}
}
?>
