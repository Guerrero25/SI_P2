<?php
class Controller{

  function __construct(){
    Sesion::start();
    $this->view = new Views();
    $this->loadClassmodels();
  }

  function loadClassmodels(){
    $model = get_class($this).'_model';
    $path = APP_PATH.'models/'.$model.".php";
    if (file_exists($path)) {
      require $path;
      $this->model = new $model();
    }
  }

}
?>
