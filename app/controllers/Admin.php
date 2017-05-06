<?php
  /**
   *
   */
  class Admin extends Controller
  {

    public function index(){
      if(isset($_SESSION['Admin'])){
        $this->view->render($this, "index","");
      }else {
        header("Location:".URL);
      }

    }

    public function nuevo_partido(){
      if (isset($_SESSION['Admin'])) {
        $this->view->render($this,"partidoNuevo", "");
      } else {
        header("Location:".URL);
      }



    }

  }


 ?>
