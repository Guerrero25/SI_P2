<?php
/**
 *
 */
class Jugador extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function estadisticas(){
    $this->view->render($this,"estadisticas","");
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
    $edit = '';
    foreach ($response as $value) {
      $ver = '<a class="btn btn-primary" href="../Jugador/detalles/'.$value->id.'">Ver</a>';
      if(isset($_SESSION['Admin'])){
        $edit = ' <a class="btn btn-danger" href="../Jugador/editar/'.$value->id.'">Editar</a>';
      }
      $equipo = $this->model->nombre_equipo($value->id_equipo);
      $equipo = $equipo->nombre;
      $data = $value->to_array();
      $data['acciones'] = $ver.$edit;
      $data['equipo'] = $equipo;
      $arreglo["data"][] = $data;

    }

    echo json_encode($arreglo);
  }

  public function editar($id)
  {
    if(isset($_SESSION['Admin'])){
      $response = $this->model->datos_jugador($id);
      // $equipo = $this->model->nombre_equipo($response->id_equipo);
      // settype($response->id_equipo,'integer');
      // $response->id_equipo = $equipo->nombre;
      $this->view->render($this, "editarJugador", $response);
    }else{
      header("Location:".URL);
    }

  }

  public function actualizar()
  {
    if(isset($_POST['hits']) && isset($_POST['turnos']) && isset($_POST['inning']) && isset($_POST['limpias']) && isset($_POST['id'])){
      $hits = $_POST['hits'];
      $turnos = $_POST['turnos'];
      $inning = $_POST['inning'];
      $limpias = $_POST['limpias'];
      $id = $_POST['id'];

      $jugador = $this->model->datos_jugador($id);
      $jugador->hits = $hits;
      $jugador->t_bate = $turnos;
      $jugador->carreras_limpias = $limpias;
      $jugador->innings_lanzados = $inning;
      $jugador->save();
      echo "Actualizado Correctamente!";
    }else{
      echo "Debe Existir Datos!";
    }
  }
}

 ?>
