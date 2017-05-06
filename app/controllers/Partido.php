<?php
/**
 *
 */
class Partido extends Controller
{

  public function nuevo()
  {
    if(isset($_POST['local']) && isset($_POST['mlocal']) && isset($_POST['visita']) && isset($_POST['mvisita']) && isset($_POST['fecha'])){
      $local = $_POST['local'];
      $mlocal = $_POST['mlocal'];
      $visita = $_POST['visita'];
      $mvisita = $_POST['mvisita'];
      $fecha = $_POST['fecha'];

      $response = $this->model->jugados($local,$visita);
      $response2 = $this->model->jugados($visita, $local);
      if ($response == '' && $response2 == '') {
        $this->model->crear($local,$visita,$mlocal,$mvisita,$fecha);
        echo '1';
      }else{
        if($response != '' && $response2 != ''){
          if((count($response->to_array()) + count($response2->to_array())) < 5){
            $this->model->crear($local,$visita,$mlocal,$mvisita,$fecha);
            echo '1';
          }else{
            echo '2';
          }
        }else{
          if ($response != '') {
            if(count($response->to_array()) < 5){
              $this->model->crear($local,$visita,$mlocal,$mvisita,$fecha);
              echo '1';
            }else{
              echo '2';
            }
            }else{
              if(count($response2->to_array()) < 5){
                $this->model->crear($local,$visita,$mlocal,$mvisita,$fecha);
                echo '1';
              }else{
                echo '2';
              }
          }
        }
      }
    }else{
      echo '3';
    }
  }
}

 ?>
