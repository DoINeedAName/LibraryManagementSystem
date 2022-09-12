<?php 
  require_once('../../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<?php
  $subjects = find_all_subjects();
?>

<div class="container">
  <div class="card m-3">
    <div class="card-header">   
      <h1 class="card-title text-center m-3">Create Book</h1>
    </div>
    <div class="card-body">
      <div class="form-check">
        <form method="post" action="<?php echo this();?>">
          <div class="form-floating mb-3">
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>
            <label class="" for="title">Title:</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="author" class="form-control" id="author" placeholder="Enter Author" required>
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
          <div class="form-floating mb-2">
            <input type="number" name="user" class="form-control" id="entered" placeholder="Enter title" required>
            <label class="" for="entered">Entered by:</label>
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
              <button class="btn btn-primary btn-lg m-1" type="submit" value="Create Book">Create Book</button>
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
  if(post_request()){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $insert_subject = $_POST['subject'];
    $available = $_POST['available'];
    $user = $_POST['user'];

    add_book($title, $author, $insert_subject, $available, $user);
    redirect_to('library.php');
  }
?>

<?php 
  include(LAYOUT_PATH .'/footer.php');
?>

