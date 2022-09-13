<?php 
  require_once('../../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<?php
  
?>

<div class="container">
  <div class="card m-3">
    <div class="card-header">   
      <h1 class="card-title text-center m-3">Register</h1>
    </div>
    <div class="card-body">
      <div class="form-check">
        <form method="post" action="<?php echo this();?>">
          <div class="form-floating mb-3">
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name" required>
            <label class="" for="first_name">First Name:</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name" required>
            <label class="" for="last_name">Last Name:</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
            <label class="" for="username">Username:</label>
          </div>
          <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
            <label class="" for="email">Email:</label>
          </div>
          <div class="form-floating mb-2">
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
            <label class="" for="password">Password:</label>
          </div>
          <div class="form-floating mb-2">
            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
            <label class="" for="confirm_password">Confirm Password:</label>
          </div>
          <div class="row mb-3 text-center">
            <div class="container">
              <button class="btn btn-primary btn-lg m-1" type="submit" value="register">Register</button>
            </div>
          </div>
          <div class="row mb-3 text-center">
            <p>Already have an account? <a href="login.php">Sign in here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
  $user =[];
  if(post_request()){
    $user['first_name'] = $_POST['first_name'];
    $user['last_name'] = $_POST['last_name'];
    $user['username'] = $_POST['username'];
    $user['email'] = $_POST['email'];
    $user['password'] = $_POST['password'];
    $user['confirm_password'] = $_POST['confirm_password'];

    if ($_POST['password'] == $_POST['confirm_password']){
      $result = create_user($user);

      if($result) {
        $new_id = mysqli_insert_id($db);
      }

      redirect_to('../book/library.php');
    }
    else {
      echo '<div class="alert alert-danger text-center" role="alert">';
      echo 'Passwords do not match!';
      echo '</div>';
    }
  }
?>

<?php 
  include(LAYOUT_PATH .'/footer.php');
?>