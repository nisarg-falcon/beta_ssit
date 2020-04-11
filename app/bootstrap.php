
<?php
  // Load Config
  require_once 'config/config.php';
  require_once 'helpers/Session.php';
  require_once 'libraries/libs/Smarty.class.php';
  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
   
  });

  ?>