<?php
/**
 *
 */
class Sesion{

  static function start(){
    @session_start();
  }

  static function getSesion($name){
    return $_SESSION[$name];
  }

  static function setSesion($name, $data){
    $_SESSION[$name] = $data;
  }

  static function destroy(){
    @session_destroy();
  }
}


 ?>
