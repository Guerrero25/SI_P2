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
  }


 ?>
