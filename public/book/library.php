<?php 
  require_once('../../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<?php 
  $result = find_all_books();
?>

<div class="container">
  <div class="row">
    <h1 class="text-center mt-3">Library Management System</h1>
  </div>
  <div class="row table-responsive-xxl">
    <table class="table table-bordered table-striped text-center fs-4">
      <thead class="table-primary">
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Author</th>
          <th>Subject</th>
          <th>Available</th>
          <th>Options</th>
        </tr>
      </thead>     
      <tbody class="fs-4">
        <?php while($book= mysqli_fetch_assoc($result)) {?>
          <tr>
            <td> <?php echo $book['book_id']; ?> </td>
            <td> <?php echo $book['book_name']; ?> </td>
            <td> <?php echo $book['book_author']; ?> </td>
            <td> <?php echo subject_id_to_name($book['subject_id']); ?></td>
            <td> <?php check_availability($book['available']); ?></td>
            <td>
              <a class="text-dark text-decoration-none" 
                  href="<?php echo 'edit.php?id='.urlencode($book['book_id']);?>">
                <button type="button" class="btn btn-warning fs-4">Edit</button>
              </a>
               <!-- Delete will probably call a function later -->
              <a class="text-light text-decoration-none" 
                  href="<?php echo 'delete.php?id='.urlencode($book['book_id']);?>">
                <button type="button" class="btn btn-danger fs-4">Delete</button>
              </a>  
            </td>
          </tr>
        <?php } ?>
      </tbody>    
    </table>
  </div>
  <div class="row col-3 mx-auto">
    
      <a class="text-dark text-decoration-none" href="add.php">
        <button type="button" class="btn btn-warning btn-lg">Add new book</button>
      </a>
    
  </div>
</div> 

<?php 
  include(LAYOUT_PATH .'/footer.php');
?>