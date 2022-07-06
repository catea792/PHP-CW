<?php 
session_start();
error =312312
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <script src="js/bootstrap.min.js"></script>
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action ="login-process.php" method="post">
    <img class="mb-4" src="images/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name ="email" class="form-control" id="floatingInput" placeholder="name@example.com" 
      value="<?php
        echo $_SESSION['account']['email'] ?? ''
      ?>"
      >
      <label for="floatingInput">Email address</label>
      <div class="invalid-feedback" style="<?php echo( isset($_SESSION['errors']['email']) ? 'display:block' : '' ) ?>">
        <?php echo $_SESSION['errors']['email'] ?? '' ?>
      </div>
    </div>
    <div class="form-floating">
      <input type="password" id="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
      value="<?php
        echo $_SESSION['account']['password'] ?? ''
      ?>"
      >
      <label for="floatingPassword">Password</label>
      <div class="invalid-feedback" style="<?php echo( isset($_SESSION['errors']['password']) ? 'display:block' : '' ) ?>">
        <?php echo $_SESSION['errors']['password'] ?? '' ?>
      </div>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="remember_me" value="remember-me" <?php echo (isset($_SESSION['account']['remember_me']) ? 'checked' : '') ?> > Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>

    <?php $_SESSION['errors'] = [] ?>
  </form>
</main>


    
  </body>
</html>
