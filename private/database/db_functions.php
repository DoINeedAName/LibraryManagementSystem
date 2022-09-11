<?php
  function find_all_books(){
    global $db;

    try{
      $sql  = "SELECT * FROM books";
      $sql .= " ORDER BY book_id;";
      $result = mysqli_query($db, $sql);
    }
    catch(Exception $e){
      echo 'Error: ' .$e->getMessage();
    }
    
    return $result;
  }

  // function find_subjects(){
  //   global $db;

  //   try{
  //     $sql  = "SELECT * FROM subjects";
  //     $sql .= " ORDER BY subject_id;";
  //     $result = mysqli_query($db, $sql);
  //   }
  //   catch(Exception $e){
  //     echo 'Error: ' .$e->getMessage();
  //   }
    
  //   return $subject;
  // }

  function find_subject_by_id($id){
    global $db;

    try{
      $sql  = "SELECT * FROM subjects";
      $sql .= " WHERE subject_id='". $id ."';";
      $result = mysqli_query($db, $sql);

      $subject = mysqli_fetch_assoc($result);
      mysqli_free_result($result);
    }
    catch(Exception $e){
      echo 'Error: ' .$e->getMessage();
    }

    return $subject;
  }

  
?>