
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Rolando, Josh and Andrei Portfolio SIGNUP</title>
    <link href="login.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="SignupContainer">
      <div class="signupBox">
        <nav>
          <span style="text-align: center;"><p><a href="./index.php">Return to Login Page</a><p></span>
         </nav>
        <header>
          <h2>BROKE KIDZ</h2>
          <h3> SIGN IN</h3>
        </header>
        <form action="signup.php" method="POST"> 
          <input id="name" name="name" placeholder="Name" required>
          <input id="email" name="email" type="email" placeholder="Email" required>
          <input id="pass" name="pass" type="password" placeholder="Password" required>
          <input id="confirmPass" type="password" placeholder="Confirm Password" required>
          <input id="frlvl" name="yrlvl" placeholder="Year Level" required>
          <input id="favclr" name="favclr" placeholder="Favourite Color">
          <input id="favfood" name="favfood" placeholder="Favourite Food">
          <button type="submit" id="submit" name="submit" onclick="signUp()">SIGN UP</button>
          <!-- Upon clicking the button above, run a check in js and replace the ids below with text if succesful -->
          <p name=""id="signupMessage" class="error-message"></p>
          <p id="signedName"></p>
          <p id="signedEmail"></p>
          <p id="signedPass"></p>
          <p id="signedYrlvl"></p>
          <p id="signedFavclr"></p>
          <p id="signedFavfood"></p>
        </form>
        <footer>
          <p>
            By signing up, you agree to becoming a <a href="#">Broke Kid</a>. Just kidding, enjoy.
          </p>
        </footer>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
  </html>

  <?php
include("db_rja.php");
session_start();

if(isset($_POST["submit"])){ //if signup has value, run code
    $password = ($_POST["pass"]);
    $username = $_POST['name']; //assigning values to the variable by finding the object that has the id 'name'
    $email = $_POST['email'];
    $yrlvl = $_POST['yrlvl'];
    $favclr = $_POST['favclr'];
    $favfood = $_POST['favfood'];

    $sql = "SELECT * FROM login_credentials WHERE username='$username'"; //scans the table for the username
    $result = mysqli_query($conn, $sql); //gets a result, usually the ID

    if(mysqli_num_rows($result) > 0){ //if ID is NOT 0, show Username Taken
        echo "<script> alert('Username Taken!') </script>";
    } else { 
        $sql = "INSERT INTO login_credentials (username, email, password, yrlvl, favclr, favfood) 
                VALUES ('$username', '$email', '$password', '$yrlvl', '$favclr', '$favfood')"; //inserts details into the table
        mysqli_query($conn, $sql);
        echo "<script> alert('Sign Up Successful!!') </script>";  
        echo "<script> window.location.href = 'index.php'; </script>"; //sends user to login page. used to be header, but it would skip the alert
    }
}
?>
