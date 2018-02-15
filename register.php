<?php
  include("includes/handlers/register-handler.php"); //Takes the specified file and places its contents to the HTML page.
  include("includes/handlers/login-handler.php"); //Takes the specified file and places its contents to the HTML page.
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Spotify Clone!</title>
  </head>
  <body>

    <div id="inputContainer">
      <!-- Login form starts -->
      <form id="loginForm" action="register.php" method="POST">
        <h2>Login to your account</h2>
        <p>
          <label for="loginUsername">Username</label>
          <input id="loginUsername" type="text" name="loginUsername" placeholder="Username" required>
        </p>
        <p>
          <label for="loginPassword">Password</label>
          <input id="loginPassword" type="password" name="loginPassword" placeholder="Password" required>
        </p>

        <button type="submit" name="loginButton">Login</button>
      </form>
      <!-- Login form ends -->
      <!-- Registration form starts -->
      <form id="registerForm" action="register.php" method="POST">
        <h2>Create your free account</h2>
        <p>
          <label for="username">Username</label>
          <input id="username" type="text" name="username" placeholder="Username" required>
        </p>

        <p>
          <label for="firstName">First name</label>
          <input id="firstName" type="text" name="firstName" placeholder="First name" required>
        </p>

        <p>
          <label for="lastName">Last name</label>
          <input id="lastName" type="text" name="lastName" placeholder="Last name" required>
        </p>

        <p>
          <label for="email">E-mail</label>
          <input id="email" type="email" name="email" placeholder="E-mail" required>
        </p>

        <p>
          <label for="email2">Confirm e-mail</label>
          <input id="email2" type="email" name="email2" placeholder="Confirm e-mail" required>
        </p>

        <p>
          <label for="password">Password</label>
          <input id="password" type="password" name="password" placeholder="Password" required>
        </p>
        <p>
          <label for="password2">Confirm password</label>
          <input id="password2" type="password" name="password2" placeholder="Confirm password" required>
        </p>

        <button type="submit" name="registerButton">Sign up</button>
      </form>
      <!-- Registration form ends -->
    </div>

  </body>
</html>
