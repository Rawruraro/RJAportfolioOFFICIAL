<?php
session_start();
include("db_rja.php"); //uses the connection to the database in the file
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
      </header>
      <form action="login.php" method="POST">
        <input id="username" name="username" placeholder="Username or Email" required>
        <input id="password" type="password" name="password" placeholder="Password or Email" required>
        <label class="remember-me"><input type="checkbox" name="remember">Remember Me</label>
        <a href="./forgot.html"><small>Forgot Username or Password?</small></a>
        <a href="./signup.php"><small>Sign Up</small></a>
        <button type="submit" name="submit" id="submit" onclick="storeUsername()">LOGIN</button>
      </form>
      <footer>
        <p>
          By logging in, you agree to becoming a <a href="#">Broke Kid</a>. Just kidding, enjoy. <strong>AUDIO WARNING</strong>
        </p>
      </footer>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>

<?php
// Login function
if (isset($_POST["submit"])) {
  $usernameOrEmail = $_POST['username'];
  $password = $_POST['password'];

  // access database using query
  $query = "SELECT * FROM login_credentials WHERE username = ? OR email = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "ss", $usernameOrEmail, $usernameOrEmail); // checks for both username and email
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);

  if ($row) { // if username/email found
      if ($password == $row["password"] || $password == $row["email"]) { // checks if password or email (counted as password) is correct
          // Login successful
          $_SESSION["username"] = $row["username"];
          echo "<script> alert('Login Success! Audio Warning, sound will play when you press OK') </script>";
          echo "<script> window.location.href = 'Frontpage.php'; </script>"; // redirect after alert
      } else {
          // Incorrect password
          echo "<script> alert('Incorrect Password or Email. Returning you to the Welcome Page.') </script>";
          echo "<script> window.location.href = 'index.php'; </script>"; // redirect after alert
          exit();
      }
  } else {
      // User not found
      echo "<script> alert('User not found. Returning you to the Welcome Page.') </script>";
      echo "<script> window.location.href = 'index.php'; </script>"; // redirect after alert
      exit();
  }
}