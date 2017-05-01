<?php
/**
 *
 */
class Usuario_model extends ActiveRecord\Model{


  function login($usuario)
  {
    return $this::find('first', array('username' => $usuario));
  }
}
 ?>
