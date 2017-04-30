<?php
/**
 *
 */
class User_model extends Conexion
{

  function __construct()
  {
    parent::__construct();
  }

  function login($fields, $where)
  {
    return $this->db->select1($fields, 'users', $where);
  }
}


 ?>
