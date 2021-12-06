<?php
class AdminController extends Controller{
	

	function view($nom){
		//$this->vars['message']="Page : ".$nom."..Identification Obligatoire!";	
		//$nom=isset($nom[0])?$nom[0]:'index';
		//$this->set('message','Page : '.$nom.'..Identification Obligatoire!');

        $this->vars['message']='Admin : Identification Obligatoire!';
        //$this->vars['page']='Admin';
        parent::view($nom);
	}
	
	
}

