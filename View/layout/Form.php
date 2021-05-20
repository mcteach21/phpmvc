<?php

class Form{
	var $html;

	function __construct($attrs){
		$this->attrs=$attrs;
	}
	
	function begin(){
		$html="<form action='".$this->attrs['action']."' method='".$this->attrs['method']."' name='".$this->attrs['name']."' />";
		echo $html;
	}
	function close(){
		echo "</form>";
	}

	function addcontrol($control,$attrs,$params){
		$html ="<".$control;
		foreach($attrs as $key=>$value)
			$html .=" ".$key."='".$value."'";
		$html .="/>";
		echo $html.(isset($params['br'])?"<br/>":"");
	}

}

?>
