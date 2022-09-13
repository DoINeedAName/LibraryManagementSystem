<?php 
  require_once('../../private/initialize.php');
  include(LAYOUT_PATH .'/header.php');
?>

<?php
$user = [];
  if(post_request()){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login_msg = "login unsuccessful";
    $user = find_user_with_email($email);

    if($user){
      if(password_verify($password, $user['password'])){
        sign_in($user);
        redirect_to('../book/library.php');
        echo $user['email'] . " is logged in";
      }
      else {
        echo $login_msg;
        $timeout = "<script>setTimeout(\"location.href=" . "'". url_for('index.php'). "'" . "\"" . ", 1500);</script>";
        echo $timeout;
      }
    }
  }
?>

<div class="container">
  <div class="card m-3">
    <div class="card-header">   
      <h1 class="card-title text-center m-3">Login</h1>
    </div>
    <div class="card-body">
      <div class="form-check">
        <form method="post" action="<?php echo this();?>">
          <!-- <div class="form-floating mb-2">
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
            <label class="" for="username">Username:</label>
          </div> -->
          <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
            <label class="" for="email">Email:</label>
          </div>
          <div class="form-floating mb-2">
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
            <label class="" for="password">Password:</label>
          </div>
          <div class="row mb-3 text-center">
            <div class="container">
              <button class="btn btn-primary btn-lg m-1" type="submit" value="register">Login</button>
            </div>
          </div>
          <div class="row mb-3 text-center">
            <p>Don't have an account? <a href="register.php">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<?php 
  include(LAYOUT_PATH .'/footer.php');
?>