<?php 
  require_once('../../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<div class="container">
  <div class="row">
    <h1 class="text-center mt-3">Create Book</h1>
  </div>
  <div class="form-check">
    <form>
      <div class="row mb-3">
        <div class="col-3">
          <label class="form-label fs-3">Title:</label>
        </div>
        <div class="col-8">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-3">
          <label class="form-label fs-3">Author:</label>
        </div>
        <div class="col-8">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-3">
          <label class="form-label fs-3">Subject:</label>
        </div>
        <div class="col-8">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label class="form-label fs-3">Available</label>
        </div>
        <div class="col">
          <input type="radio" id="yes" name="available" class="btn-check" >
          <label class="btn btn-outline-primary btn-lg" for="yes" value="yes">Yes</label>
        </div>
        <div class="col">
          <input type="radio" class="btn-check" id="no" name="available">
          <label class="btn btn-outline-primary btn-lg" for="no" value="no">No</label>
        </div>
      </div>
        <div class="row mb-3">
          <div class="col-3">
            <label class="form-label fs-3">Entered By:</label>
          </div>
          <div class="col-8">
            <input type="text" class="form-control">
          </div>
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

