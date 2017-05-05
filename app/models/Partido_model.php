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

  public function crear($local,$visita,$mlocal,$mvisita){
    $atributos = array('local' => $local, 'visita' => $visita, 'm_local' => $mlocal, 'm_visita' => $mvisita, 'fecha' => '2017-05-04');
    $this->create($atributos);
  }
}


 ?>
