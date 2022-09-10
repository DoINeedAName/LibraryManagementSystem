<?php

// Checks if there is a script path


  // My way
  function url_for($script_path){
    if(strlen($script_path) !=0){
      return WWW_ROOT.$script_path;
    }
    else{
      echo("Forgot to enter URL");
    }
  }

  // return WWW_ROOT.'/'.$script_path;


  // The Jefi way. Not sure if all of it is neccessary
  // function url_for($script_path=""){
  //   if(strlen($script_path) !=0 && $script_path[0] !='/'){
  //     $script_path = '/'.$script_path;
  //   }

  //   return WWW_ROOT.$script_path;
  // }
?>