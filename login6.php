<?php
if(isset($_SESSION['email'])){
      header("location: AddToCart.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="style6.css" />

    <!-- Import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form method="post" action="register.php">
          <h1>Create Account</h1>
          <input type="text" placeholder="name" name="name" required />
          <input type="email" placeholder="email" name="email" required />
          <input
            type="password"
            placeholder="password"
            name="password"
            required
          />
          <input type="submit" class="btn" value="Sign Up" name="signUp" />
        </form>
      </div>

      <div class="form-container sign-in">
        <form method="post" action="register.php">
          <h1>Login</h1>

          <input type="email" placeholder="email" name="email" required />
          <input
            type="password"
            placeholder="password"
            name="password"
            required
          />
          <a href="#">Forget Your Password?</a>
          <input type="submit" class="btn" value="login" name="login" />
        </form>
      </div>

      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of the site's features</p>
            <button class="hidden" id="login">Login</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello!</h1>
            <p>
              Register with your personal details to use all of the site's
              features
            </p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <script src="script6.js"></script>
  </body>
</html>
