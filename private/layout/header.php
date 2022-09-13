<?php 
  require_once(PRIVATE_PATH .'\functions.php');
?>

<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS</title>
      <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand fs-1" href="index.php">LMS</span>  
        </div>
        <button 
          class="navbar-toggler" 
          type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" 
          aria-expanded="false" 
          aria-label="Toggle navigation">       
            <span class="navbar-toggler-icon"></span>   
        </button> 
        <div class="container-fluid text-light">
          <span class="navbar-brand mb-0 h1 fs-2">Library Management System</span>
        </div> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">             
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mx-1">
              <a class="nav-link fs-3 text-warning" aria-current="page" 
                href="<?php echo url_for('auth/register.php'); ?>">
                Register
              </a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link fs-3 text-warning" aria-current="page" 
                href="<?php echo url_for('auth/login.php'); ?>">
                Login
              </a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link fs-3 text-warning" aria-current="page" 
                href="<?php echo url_for('auth/logout.php'); ?>">
                Logout
              </a>
            </li>  
          </ul>
        </div>
      </nav>
    </header>

    <!-- <?php if(!isset($_SESSION['email'])) { ?>
              <li class="nav-item mx-1">
              <a class="nav-link fs-3 text-warning" aria-current="page" 
                href="<?php echo url_for('auth/register.php'); ?>">
                Register
              </a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link fs-3 text-warning" aria-current="page" 
                href="<?php echo url_for('auth/login.php'); ?>">
                Login
              </a>
            </li>
            <?php 
              } 
                else{
            ?>
            <li class="nav-item mx-1">
              <a class="nav-link fs-3 text-warning" aria-current="page" 
                href="<?php echo url_for('auth/register.php'); ?>">
                logout
              </a>
            </li>
            
            <?php } ?> -->