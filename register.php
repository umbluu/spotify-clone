<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Spotify Clone!</title>
  </head>
  <body>

    <div id="inputContainer">
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
    </div>

  </body>
</html>
