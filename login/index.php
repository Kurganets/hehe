<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "sis";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL injection protection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Retrieve user data from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if ($password== $row['password']) {
            // Password is correct, start a new session
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            exit;
        } else {
            // Invalid password
            $error = "Invalid username or password.";
        }
    } else {
        // User not found
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login V19</title>
    <link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title p-b-33">
                        Account Login
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="username">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn">
                            Sign in
                        </button>
                    </div>
                    <div class="text-center p-t-45 p-b-4">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a href="#" class="txt2 hov1">
                            Username / Password?
                        </a>
                    </div>
                    <div class="text-center">
                        <span class="txt1">
                            Create an account?
                        </span>
                        <?php if(isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
                        <a href="#" class="txt2 hov1">
                            Sign up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>