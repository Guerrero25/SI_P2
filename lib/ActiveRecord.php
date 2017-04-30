<?php
  require_once SYS_PATH.'php-activerecord/ActiveRecord.php';

  ActiveRecord\Config::initialize(function($cfg){
   $cfg->set_model_directory(APP_PATH.'models');
   $cfg->set_connections(array(
       'development' => 'mysql://root:@localhost/liga_baseball'));
});

 ?>
