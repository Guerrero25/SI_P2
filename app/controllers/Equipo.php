<?php
/**
 *
 */
class Equipo extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function detalles($id){
    if (is_numeric($id)) {
      $response = $this->model->datos_equipo($id);
      if($response != null){
        $this->view->render($this,"equipo",$response);
      }else {
        header("Location:".URL.'public/Usuario/index');
      }

    }

  }
}

 ?>
