<?php
/**
 *
 */
class Equipo_model extends ActiveRecord\Model
{

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
