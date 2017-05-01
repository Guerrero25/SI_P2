<?php
/**
 *
 */
class Jugador_model extends ActiveRecord\Model
{
  function datos_jugador($id){
    return $this->find('first', array('id' => $id));
  }

  public function todos(){
    return  $this->find('all');
  }
}


 ?>
