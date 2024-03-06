<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email RJA</title>
    <link href="login.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h2>Change Email</h2>
    <form action="changeEmail.php" method="POST">
        <strong>New Email:</strong>
        <input type="email" id="new_email" name="new_email" value="youremail@domain.com" required>
        <button type="submit" name="submit">Change Email</button>
        <a href="./Frontpage.php"> Return to Front Page</a>
    </form>
</body>
</html>
<?php
session_start();
include("db_rja.php");

// get current user's username
$username = $_SESSION["username"];

// check if form is submitted
if (isset($_POST["submit"])) {
    // Get new email from form
    $newEmail = $_POST["new_email"];

    // update email in the database
    $query = "UPDATE login_credentials SET email = ? WHERE username = ?";//update TABLE NAME, set COLUMN YOU WANT UPDATED, inside ROW OF THE SPECIFIED VARIABLE
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $newEmail, $username);
    mysqli_stmt_execute($stmt);

    // redirect to a success page or display a success message
    echo "<script> alert('Email Changed! Sending you back to login page.') </script>";
    echo "<script> window.location.href = 'login.php'; </script>";
    exit();
}
?>