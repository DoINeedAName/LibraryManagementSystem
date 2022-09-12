<?php 
  require_once('../../private/initialize.php');
  //include(LAYOUT_PATH .'/header.php');
?>

<?php 
  $id = $_GET['id']; 
  delete_book($id);

  redirect_to('library.php');
?>