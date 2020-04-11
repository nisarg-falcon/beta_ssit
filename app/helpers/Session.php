<?php
      session_start();
    function set_session($name , $value){
          $_SESSION[$name] = $value;  
    }
    function unset_session(){
      session_unset();
          session_destroy();
    }
