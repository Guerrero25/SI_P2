<?php
  /**
   *
   */
  class Liga extends Controller{

    public function partidos(){
  		$response = $this->model->ver_partidos();

  		$this->view->render($this, "partidos",$response);
  	}

    public function general(){
      $response = $this->model->ver_posiciones();

      $this->view->render($this, "posiciones", $response);
    }

    public function divisiones(){
      $response = $this->model->ver_divisiones();

      $this->view->render($this, "divisiones", $response);
    }

    public function estadisticas(){
      $this->view->render($this,"estadisticas","");
    }

    public function estadisticasEquipo(){
    if(isset($_POST['division'])){
      $response = $this->model->equipos_division($_POST['division']);
      $this->view->render($this,"estadisticasEquipo",$response);
    }else if(isset($_POST['todo'])){
      $response = $this->model->todos_equipos();
      $this->view->render($this,"estadisticasEquipo",$response);
    }else{
      $response = $this->model->todos_equipos();
      $this->view->render($this,"estadisticasEquipo",$response);
    }
    }
  }

 ?>
