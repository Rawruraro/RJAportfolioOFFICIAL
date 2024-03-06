<?php
include("db_rja.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Rolando, Josh and Andrei Portfolio SIGN IN</title>
  <link href="login.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="SignupContainer">
    <div class="signupBox">
      <header>
        <h2>BROKE KIDZ</h2>
        <h3> SIGN IN</h3>      
        <button onclick="window.location.href = 'login.php'">Login</button>
        <button onclick="window.location.href = 'signup.php'">Sign Up</button>
        </header>
      <footer>
        <p>
          Welcome to BROKE KIDZ! Please, choose an option!<strong>AUDIO WARNING</strong>
        </p>
      </footer>
    </div>
  </div>
</body>
</html>

<?php
session_destroy();
?>