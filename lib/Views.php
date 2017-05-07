<?php
/**
 *
 */
class Views
{

  function __construct(){

  }

  function render($controller, $view, $array){
    $controllers = get_class($controller);
    require APP_PATH.'views/'.DFT.'head.php';
    require APP_PATH.'views/'.$controllers.'/'.$view.'.php';
    require APP_PATH.'views/'.DFT.'footer.php';
  }
}


 ?>
