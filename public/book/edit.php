<?php 
  require_once('../../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<?php
  $subjects = find_all_subjects();

  $title = '';
  $author = '';
  $insert_subject = '';
  $available = '';

  if(post_request()){
    $book = [];

    $id = $book['book_id'] = $_POST['id'] ?? 1;
    $title = $book['book_name'] = $_POST['title'] ?? '';
    $author = $book['book_author']= $_POST['author'] ?? '';
    $insert_subject = $book['subject_id'] = $_POST['subject'] ?? '';
    $available = $book['available'] = $_POST['available'] ?? '';

    edit_book($book);
    echo "book edited yay"
    // redirect_to('library.php');
  }
  else {
    if(!isset($_GET['id'])){
      redirect_to('library.php');
    }
    else {
      $id = $_GET['id'];
    }

    $book = find_book_with_id($id);
    $title = $book['book_name'];
    $author = $book['book_author'];
    $insert_subject = $book['subject_id'];
    $available = $book['available'];
  }
?>

<div class="container">
  <div class="card m-3">
    <div class="card-header">   
      <h1 class="card-title text-center m-3">Edit Book</h1>
    </div>
    <div class="card-body">
      <div class="form-check">
        <form method="post" action="<?php echo ('edit.php?id=' .htmlspecialchars(urlencode($id)))?>">
          <div class="form-floating mb-3">
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" required value="<?php echo $title ?>">
            <label class="" for="title">Title:</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="author" class="form-control" id="author" placeholder="Enter Author" required value="<?php echo $author ?>">
            <label class="" for="author">Author:</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="subject" name="subject">
              <?php while($subject= mysqli_fetch_assoc($subjects)) {?>
                <option value="<?php echo $subject['subject_id']; ?>"><?php echo $subject['subject_name']; ?></option>
              <?php } ?>
            </select>
            <label for="subject">Subject:</label>
          </div>
          <div class="mb-3">
            <label class="form-label fs-3 m-3">Available:</label>
            <input type="radio" id="yes" name="available" class="btn-check" value="1" required>
            <label class="btn btn-outline-primary btn-lg m-1" for="yes">Yes</label>
            <input type="radio" class="btn-check" id="no" name="available" value="0" >
            <label class="btn btn-outline-primary btn-lg m-1" for="no">No</label>
          </div>
          <div class="row mb-3 text-center">
            <div class="container">
              <button class="btn btn-primary btn-lg m-1" type="submit" value="Update Book">Update Book</button>
              <a href="library.php">
                <button type="button" class="btn btn-primary btn-lg m-1" value="Discard Changes">Cancel</button>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
  
?>

<?php 
  include(LAYOUT_PATH .'/footer.php');
?>

