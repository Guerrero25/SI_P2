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

  public function crear($local,$visita,$mlocal,$mvisita,$fecha){
    $atributos = array('local' => $local, 'visita' => $visita, 'm_local' => $mlocal, 'm_visita' => $mvisita, 'fecha' => $fecha);
    $this->create($atributos);
  }

  function ver_partidos(){
    return $this->find('all', array('order' => 'fecha DESC'));
  }
}


 ?>
