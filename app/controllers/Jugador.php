<?php
/**
 *
 */
class Jugador extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function detalles($id){
    if (is_numeric($id)) {
      $response = $this->model->datos_jugador($id);
      if($response != null){
        $this->view->render($this,"jugador",$response);
      }else {
        header("Location:".URL.'Usuario/index');
      }

    }

  }

  public function jugadores(){
    $response = $this->model->todos();

    foreach ($response as $value) {
      $ver = '<a class="btn btn-primary" href="../Jugador/detalles/'.$value->id.'">Ver</a>';
      $equipo = $this->model->nombre_equipo($value->id_equipo);
      $equipo = $equipo[0]->nombre;
      $data = $value->to_array();
      $data['acciones'] = $ver;
      $data['equipo'] = $equipo;
      $arreglo["data"][] = $data;

    }

    echo json_encode($arreglo);
  }
}

 ?>
