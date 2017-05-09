<?php
/**
 *
 */
class Partido_model extends ActiveRecord\Model
{
  public function jugados($local,$visita)
  {
    return $this->find(array('conditions' => array('local = ? AND visita = ?',$local,$visita)));
  }

  public function crear($local,$visita,$mlocal,$mvisita,$fecha,$estadio){
    $atributos = array('local' => $local, 'visita' => $visita, 'm_local' => $mlocal, 'm_visita' => $mvisita, 'fecha' => $fecha, 'estadio' => $estadio);
    $this->create($atributos);
  }

  function ver_partidos(){
    return $this->find('all', array('order' => 'fecha DESC'));
  }

  function estadio($equipo)
  {
    $m = $this->first(array('from' => 'equipo_models', 'conditions' => array('nombre = ?', $equipo)));
    return $m->estadio;
  }
}


 ?>
