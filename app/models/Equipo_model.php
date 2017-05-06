<?php
/**
 *
 */
class Equipo_model extends ActiveRecord\Model
{
  function ver_posiciones(){
    return $this->find('all',array('order' => 'p_win DESC, p_loss ASC'));
  }

  function datos_equipo($id){
    return $this->find('first', array('id' => $id ));
  }

  public function equipo($equipo)
  {
    return $this->find('first', array('conditions' => array('nombre = ?', $equipo)));
  }

  public function todos(){
    return  $this->find('all');
  }

  public function equipos($id){
    return $this->find('all', array('e_div' => $id));
  }

}

 ?>
