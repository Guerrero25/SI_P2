<?php
/**
 *
 */
class Equipo_model extends ActiveRecord\Model
{

  function datos_equipo($id){
    return $this->find('first', array('id' => $id ));
  }

  public function todos(){
    return  $this->find('all');
  }

}

 ?>
