<?php

  function find_all_books(){
    global $db;

    try{
      $sql  = "SELECT * FROM books";
      $sql .= " ORDER BY book_id;";
      $result = mysqli_query($db, $sql);
    }
    catch(Exception $e){
      echo 'ERROR: ' .$e->getMessage();
    }
    
    return $result;
  }

  function find_book_with_id($id){
    global $db;
    try {
      $sql  = "SELECT * FROM books";
      $sql .= " WHERE book_id='". $id ."';";
      $result = mysqli_query($db, $sql);

      $book = mysqli_fetch_assoc($result);
      mysqli_free_result($result);
    }
    catch (Exception $e){
      echo 'ERROR: ' .$e->getmessage();
    }

    return $book;
  }

  function edit_book($book){
    global $db;

      $sql  = "UPDATE `books` SET ";
      $sql .= "`book_name` ='".$book['book_name']. "', ";
      $sql .= "`book_author` ='".$book['book_author']. "', ";
      $sql .= "`subject_id` ='".$book['subject_id']. "', ";
      $sql .= "`available` ='".$book['available']. "', ";
      $sql .= "WHERE book_id='".$book['book_id']. "';";

      $result = mysqli_query($db, $sql);

      if($result) {
        return true;
      }
      else{
        echo mysqli_error($db);
        db_disconnect($db);
      }
  }

  function delete_book($id) {
    global $db;

    $sql  = "DELETE FROM `books` ";
    $sql .= "WHERE `book_id`='".$id. "';";

    $result = mysqli_query($db, $sql);

    if($result) return true;
    else {
      echo mysqli_error($db);
      db_disconnect($db);
    }
  }

  function find_all_subjects(){
    global $db;

    try{
      $sql  = "SELECT * FROM subjects";
      $sql .= " ORDER BY subject_id;";
      $result = mysqli_query($db, $sql);
    }
    catch(Exception $e){
      echo 'ERROR: ' .$e->getMessage();
    }
    
    return $result;
  }

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
      echo 'ERROR: ' .$e->getMessage();
    }

    return $subject;
  }

  function add_book($title, $author, $subject, $available, $user){
    global $db;

    try {
      $sql  = "INSERT INTO books (`book_name`, `book_author`, `subject_id`, `available`, `user_id`) VALUES (";
      $sql .= "'" . $title . "', ";
      $sql .= "'" . $author . "', ";
      $sql .= "'" . $subject . "', ";
      $sql .= "'" . $available . "', ";
      $sql .= "'" . $user . "');";
  
      $result = mysqli_query($db, $sql);

      if($result){
        $new_id = mysqli_insert_id($db);
      }
      else {
        echo mysqli_error($db);
        db_disconnect($db);
      }
    }
    catch(Exception $e){
    echo 'ERROR: ' .$e->getMessage();
   }
  }
  
?>