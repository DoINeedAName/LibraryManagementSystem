<?php 
  require_once('../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<div class="mt-3">
  <h1 class="text-center fs-1">Library Management System</h1>
  <br>
</div>
<div class="text-center mt-3">
  <p class="fs-4">
    Welcome to the Library Management System. <br>
    Please sign in to continue.
  </p>
</div>
<div class="container text-center mt-3">
  <div class="row">
    <div class="col ">
      <button type="button" class="btn btn-warning btn-lg m-3">
        <a class="text-dark text-decoration-none fs-1 px-2" href="<?php echo url_for('auth/register.php'); ?>">Register</a>
      </button>
    </div>
    <div class="col">
      <button type="button" class="btn btn-warning btn-lg m-3">
        <a class="text-dark text-decoration-none fs-1 px-4" href="<?php echo url_for('auth/login.php'); ?>">Login</a>
      </button>
    </div>
  </div>
</div>

<?php 
  include(LAYOUT_PATH .'/footer.php');
?>

    