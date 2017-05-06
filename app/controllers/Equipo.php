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
        header("Location:".URL.'Usuario/index');
      }

    }
  }

  public function equipos(){
    $response = $this->model->todos();

    foreach ($response as $value) {
      $ver = '<a class="btn btn-primary" href="../Equipo/detalles/'.$value->id.'">Ver</a>';
      $data = $value->to_array();
      $data['acciones'] = $ver;
      $arreglo["data"][] = $data;

    }

    echo json_encode($arreglo);
  }

  public function equipos_division()
  {
    $id = $_POST['division'];
    $response = $this->model->equipos($id);
    foreach ($response as $value) {
      $data = $value->to_array();
      $arreglo[] = $data;

    }
    echo json_encode($arreglo);
  }

  public function actualizar(){
    $local = $_POST['local'];
    $visita = $_POST['visita'];
    $mlocal = $_POST['mlocal'];
    $mvisita = $_POST['mvisita'];

    $eql = $this->model->equipo($local);
    $eqv = $this->model->equipo($visita);

    $eql->carreras = $eql->carreras + $mlocal;
    $eqv->carreras = $eqv->carreras + $mvisita;

    if($mlocal > $mvisita){
      $eql->p_win = $eql->p_win + 1;
      $eqv->p_loss = $eqv->p_loss + 1;
      $eql->save();
      $eqv->save();
      echo 'Registro Exitoso!';
    }else{
      if ($mlocal < $mvisita) {
        $eql->p_loss = $eql->p_loss + 1;
        $eqv->p_win = $eqv->p_win + 1;
        $eql->save();
        $eqv->save();
        echo 'Registro Exitoso!';
      }
    }
  }
}

 ?>
