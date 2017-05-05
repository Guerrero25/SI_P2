<?php
/**
 *
 */
class Partido extends Controller
{

  public function nuevo()
  {
    $local = $_POST['local'];
    $mlocal = $_POST['mlocal'];
    $visita = $_POST['visita'];
    $mvisita = $_POST['mvisita'];

    $response = $this->model->jugados($local,$visita);
    if(sizeof($response)<5){
      $this->model->crear($local,$visita,$mlocal,$mvisita);
      echo '1';
    }else{
      echo '2';
    }
  }
}

 ?>
