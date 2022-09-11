<?php 
  require_once("db_credentials.php");

  // Retrieves the db_credentials to connect to MySQL database
  function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;

    // Checks if the connection works
    if (mysqli_connect_errno()) {
      echo "Failed to connect to the database: " .mysqli_connect_error();
      exit();
    }
  }

  // Disconnects the database
  function db_disconnect($connection){
    if(isset($connection)){
      mysqli_close($connection);
    }
  }

  
  function db_escape($connection, $string){
    return mysqli_real_escape_string($connection, $string);
  }

  // function subject_id_to_name($id, $book){
  //   $subjectID = $book['subject_id'];
  //   $subject = find_subject_by_id($subjectID);
  //   $subject_name = $subject['subject_name'];
  //   return ($subject_name);
  // }
?>