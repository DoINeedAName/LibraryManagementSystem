<?php

// Checks if there is a script path
function url_for($script_path=""){
  if(strlen($script_path) !=0 && $script_path[0] !='/'){
    $script_path = '/'.$script_path;
  }
  else{
    // throw new Exception("Forgot to enter URL");
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

  function sign_in($user){
    session_start();
    $_SESSION['id'] = $user['user_id'];
    $_SESSION['email'] = $user['email'];
    // $_SESSION['username'] = $user['username'];
    $_SESSION['last_login'] = time();
  }

  function log_out_user(){
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['last_login']);
    redirect_to(url_for('/index.php'));
  }

  function redirect_to_login(){
    if(basename($_SERVER['SCRIPT_NAME'])=='index.php'){
      ;
    }
    elseif(basename($_SERVER['SCRIPT_NAME'])!='login.php' and !isset($_SESSION['id'])){
      redirect_to(url_for('/auth/login.php'));
    }
  } 
?>