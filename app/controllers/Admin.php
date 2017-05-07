<?php
  /**
   *
   */
  class Admin extends Controller
  {

    public function index(){
      if(Sesion::getSesion('Admin') != ''){
        $this->view->render($this, "index","");
      }else {
        header("Location:".URL);
      }

    }

    public function nuevo_partido(){
      if (Sesion::getSesion('Admin') != '') {
        $this->view->render($this,"partidoNuevo", "");
      } else {
        header("Location:".URL);
      }



    }

  }


 ?>
