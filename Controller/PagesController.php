<?php
class PagesController extends Controller{
	

	function view($nom){
//		echo "[PagesController] vous avez demandé la vue : ".$nom[0].'..la voici! :';
//		$this->vars['message']="Bienvenue sur la page : ".$nom;
//		$this->set('message','Bienvenue sur la page : '.$nom);
		
		//$nom=isset($nom[0])?$nom[0]:'index';

		//$this->set(array('message'=>'Bienvenue sur la page : ', 'page'=>$nom));

        $this->vars['message']='Bienvenue sur la page : ';
        parent::view($nom);
	}
	
	
}

