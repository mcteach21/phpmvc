<?php
class Request{
	public $url; //url appelé
	
	function __construct(){
		$this->url=isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'';
	}
}
?>
