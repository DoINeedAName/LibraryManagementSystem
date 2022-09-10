<?php 
  ob_start();

  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH .'\public');
  define("DATABASE_PATH", PRIVATE_PATH .'\database');
  define("LAYOUT_PATH", PRIVATE_PATH .'\layout');
  
  define("AUTH_PATH", PUBLIC_PATH .'\auth');
  define("BOOK_PATH", PUBLIC_PATH .'\book');

  // This turns the directory of the current script into a string.
  // It then looks for the start position of "/public" in the string.
  // It then moves to the end of "/public" by adding the amount of
  // characters in that part of the string.
  // This returns the amount of characters in the directory until it
  // gets to the end of public.
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + strlen('/public');
  // This slices the directory from the start to the amount
  // that was found with $public_end.
  // This ensures it will always return 
  // "/LibraryManagementSystem/LibraryManagementSystem/public"
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require_once('functions.php');
?>