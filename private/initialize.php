<?php 
  ob_start();
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH .'\public');
  define("DATABASE_PATH", PRIVATE_PATH .'\database');
  define("LAYOUT_PATH", PRIVATE_PATH .'\layout');
  define("AUTH_PATH", PUBLIC_PATH .'\authentication');
  define("BOOK_PATH", PUBLIC_PATH .'\book');
?>