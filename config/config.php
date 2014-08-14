<?php
	function __autoload($classes){
		if(is_file("classes/".$classes.".class.php")){
			require_once("classes/".$classes.".class.php");
		}
	}
?>