<?php
// (A) LOGIN CHECKS
require "check.php";

// (B) LOGIN PAGE HTML ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page Demo</title>
    <link href="login.css" rel="stylesheet">
  </head>
  <body>

  <div class="background-logo"></div>

   
<section id="login-box">

    <form action="login.php" class="form" method="post" >
      <h1>LOGIN</h1>
      <label for="user">User</label>
      <input type="username" placeholder=" enter username" name="user" required>
      <label for="password">Password</label>
      <input type="password" placeholder="Enter password" name="password" required>
      <input type="submit" value="Sign In" id="submit">
    </form>
    <?php if (isset($failed)) { ?>
      <div id="login-bad">Invalid email or password.</div>
      <?php } ?>
      </section>
  </body>
</html>