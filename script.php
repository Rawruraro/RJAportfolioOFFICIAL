<?php
// Database connection
function connectDB() {
    $conn = mysqli_connect("localhost", "root", "", "db_rja");
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

// Login function
function login($conn) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errorMessage = '';

    // Query database with prepared statement
    $query = "SELECT * FROM login_credentials WHERE username=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['Password'])) {
            // Login successful
            $errorMessage = "Login Success! Audio Warning, sound will play when you press OK";
            // Redirect to frontpage.php or any desired location
            header("Location: Frontpage.html");
            exit();
        }
    }

    // Login failed
    $errorMessage = "Invalid username or password.";
    return $errorMessage;
}

// Main code
$conn = connectDB();

if(isset($_POST['username'], $_POST['password'])) {
    $errorMessage = login($conn);
}

// Display error message if any
echo $errorMessage ?? '';

mysqli_close($conn);
?>
<script>
    setTimeout(function(){
        alert("You are being logged out for inactivity."); // alert user they are being logged out
        window.location.href = "index.html";
    }, 60000); // 1 minute timer in milliseconds
</script>