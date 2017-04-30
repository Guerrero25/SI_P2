<?php 

spl_autoload_register(function($class){
	if(file_exists(SYS_PATH.$class.".php")){
		require SYS_PATH.$class.".php";
	}
	if(file_exists(APP_PATH."http/".$class.".php")){
		require APP_PATH."http/".$class.".php";
	}
	if(file_exists(APP_PATH."models/".$class.".php")){
		require APP_PATH."http/".$class.".php";
	}
});

 ?>