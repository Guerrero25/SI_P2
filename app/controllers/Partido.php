<?php
/**
 *
 */
class Partido extends Controller
{

  public function nuevo()
  {
    if(isset($_POST['local']) && isset($_POST['mlocal']) && isset($_POST['visita']) && isset($_POST['mvisita'])){
      $local = $_POST['local'];
      $mlocal = $_POST['mlocal'];
      $visita = $_POST['visita'];
      $mvisita = $_POST['mvisita'];

      $response = $this->model->jugados($local,$visita);
      if(count($response) < 5){
        $this->model->crear($local,$visita,$mlocal,$mvisita);
        echo '1';
      }else{
        echo '2';
      }
    }else{
      echo '3';
    }
  }
}

 ?>
