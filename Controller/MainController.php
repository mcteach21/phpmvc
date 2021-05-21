<?php
class MainController extends Controller{
	

	function view($params){
        $view_name=isset($params[0])?$params[0]:'index';
        $view_path=ROOT.DS.'View'.DS.$view_name.'.php';

        if (!file_exists($view_path))
            $view_path=ROOT.DS.'View'.DS.'shared'.DS.'error.php';

        $this->vars['page']=$view_name;
        $this->vars['message']='Main Controller - Page : ';
        $this->render($view_path);

        //print_r($nom);
	}
	
	
}

