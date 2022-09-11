<?php 
  require_once('../../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<div class="container">
  <div class="row">
    <h1 class="text-center mt-3">Create Book</h1>
  </div>
  <div class="row">
    <form>
      <div class="row mb-3">
        <label class="form-label fs-3">Title</label>
        <input type="text" class="form-control">
      </div>
      <div class="row mb-3">
        <label class="form-label fs-3">Author</label>
        <input type="text" class="form-control">
      </div>
      <div class="row mb-3">
        <label class="form-label fs-3">Subject</label>
        <input type="text" class="form-control">
      </div>
      <div class="row mb-3">
        <label class="form-label fs-3">Available</label>
        <input type="text" class="form-control">
      </div>
      <div class="row mb-3">
        <label class="form-label fs-3">Entered by</label>
        <input type="text" class="form-control">
      </div>
      <div class="row mb-3 text-center">
        <div class="col">
          <button class="btn btn-primary" type="submit">Create Book</button>
        </div>
        <div class="col">
          <button class="btn btn-primary" type="submit">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php 
  include(LAYOUT_PATH .'/footer.php');
?>

