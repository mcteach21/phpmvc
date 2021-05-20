<?php
class Controller{
	var $request;
	var $layout='default';
	
	public $vars=array();
	
	function __construct($request){
		$this->request=$request;
	}
	
	function view($params){

		$view_name=isset($params[0])?$params[0]:'index';	

		//$this->vars['message']="Bienvenue sur la page : ".$nom;

		extract($this->vars);
		
		$view_path=ROOT.DS.'View'.DS.$this->request->controller.DS.$view_name.'.php';	

		if (!file_exists($view_path)) {
			/*$this->error('Url demandée non valide!');
			return;*/
			$view_path=ROOT.DS.'View'.DS.'shared'.DS.'error.php';
		}

		$this->render($view_path);
	}

	public function render($view){
		

		//$this->display($view);

		ob_start();
		require $view;
		$content_for_layout=ob_get_clean();
		require ROOT.DS.'View'.DS.'layout'.DS.$this->layout.'.php';
		
		//die($view);*/
	}
	
	public function set($key,$value=null){
		 if(is_array($key))
		 	$this->vars +=$key;
	 	 else
		 	$this->vars[$key]=$value;
	}
	/*public function error($msg){
		$view=ROOT.DS.'View'.DS.'shared'.DS.'error.php';
		
		//$this->set(array('message'=>$msg, 'page'=>'404!'));
		$this->render($view);
	}*/

	/*private function display($view){

		$this->set(array('message'=>'Bienvenue sur la page : ', 'page'=>$view));

		print_r($this->vars);

		ob_start();
		require $view;
		$content_for_layout=ob_get_clean();
		require ROOT.DS.'View'.DS.'layout'.DS.$this->layout.'.php';
	}*/
}
?>
