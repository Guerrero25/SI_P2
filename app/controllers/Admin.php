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

    public function nuevo_partido(){
      $this->view->render2($this,"partidoNuevo", "");

    }

  }


 ?>
