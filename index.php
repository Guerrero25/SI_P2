<?php
require "lib/config.php";
require SYS_PATH."ActiveRecord.php";
require SYS_PATH."Autoloader.php";

$url = isset($_GET['url']) ?$_GET['url']:"Usuario/index";
$url= explode("/", $url);

if (isset($url[0])) {
	$controllerName = $url[0];
}
if (isset($url[1])) {
	$method = $url[1];
}
if(isset($url[2])){
	if($url[1] != ''){
		$params = $url[2];
	}
}

if (file_exists(APP_PATH."controllers/".$controllerName.".php")) {
	require APP_PATH."controllers/".$controllerName.".php";
	$controller = new $controllerName();
	if (isset($method)) {
		if (method_exists($controllerName, $method)) {
			if (isset($params)) {
				$controller->$method($params);
			}else{
				$controller->$method();
			}
		}else{
			echo "Error no existe el metodo";
		}
	}

}else{
	echo "Error la url no existe";
}
?>
