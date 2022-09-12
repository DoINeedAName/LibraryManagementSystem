<?php

// Checks if there is a script path
function url_for($script_path=""){
  if(strlen($script_path) !=0 && $script_path[0] !='/'){
    $script_path = '/'.$script_path;
  }
  else{
    throw new Exception("Forgot to enter URL");
  }
  return WWW_ROOT.$script_path;
}

  // Retrieves the subject_id and returns the subject_name
  function subject_id_to_name($id){
    try{
      $subject = find_subject_by_id($id);
      $subject_name = $subject['subject_name'];
      return ($subject_name);
    }
    catch(Exception $e){
      echo 'Error: ' .$e->getMessage();
    }
  }

  // function subject_name_to_id($name){
  //   try{
  //     $subject = find_subject_by_id($name);
  //     $subject_id = $subject['subject_id'];
  //     return ($subject_id);
  //   }
  //   catch(Exception $e){
  //     echo 'Error: ' .$e->getMessage();
  //   }
  // }

  function check_availability($value){
    if($value=='1'){
      echo("Yes"); 
    }
    elseif($value=='0'){
      echo("No");
    }
    else{
      throw new Exception("Availability not entered or entered incorrectly");
    }
  }

  function redirect_to($location){
    header("Location: ". $location);
  }

  function post_request(){
    return $_SERVER['REQUEST_METHOD']=='POST';
  }

  function get_request(){
    return $_SERVER['REQUEST_METHOD']=='GET';
  }

  function this(){
    return htmlspecialchars($_SERVER["PHP_SELF"]);
  }

  // function call_delete(){
  //   $id = $_GET['id']; 
  //   delete_book($id); 
  // }
  
?>