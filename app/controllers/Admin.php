<?php
  /**
   *
   */
  class Admin extends Controller
  {

    public function index(){
      if(isset($_SESSION['Admin'])){
        $this->view->render2($this, "index","");
      }else {
        header("Location:".URL);
      }

    }

    public function nuevo_partido($id){
      if(is_numeric($id)){
        $response = file_get_contents(URL.'Equipo/equipos_division/'.$id);
        $this->view->render2($this,"partidoNuevo", $response);
      }
    }

  }


 ?>
