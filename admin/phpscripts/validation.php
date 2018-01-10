<?php

// echo "works";

function has_value($value){
	return isset($value) && $value !=="";
}

function form_errors($errors=array()){
	$op = "";
	if(!empty($errors)){
		$op .= "your Attention is required on the following";
		$op .= "<ul>";
		foreach($errors as $key => $error){
			$op .= "<li>{$error}</li>";
		}
		$op .= "<li>{$error}</li>";
		
		$op .= "</ul>";		
	}
	return $op;
}

?>