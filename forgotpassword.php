<?php
session_start();

// Include necessary files or configurations

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission (check if the provided information is correct)
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    // Example: Fetch user from the database based on provided information
    $user = getUserFromDatabase($fullname, $email);

    if ($user) {
        // User found, display their password (for demonstration purposes)
        echo "Your password is: " . $user['password'];
    } else {
        // User not found or information is incorrect
        echo "Invalid full name or email. Please try again.";
    }
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <!-- Your existing styles and scripts -->
</head>
<body>
    <center>
        <fieldset>
            <legend>Try to remember something!</legend>
    <div class="login-container">
        <h2><i class="fa-solid fa-circle-user fa-fade"></i>&nbsp;forgot password</h2>
        <form method="post" action="authenticate.php">
            <p>Enter your full name and <br>email to retrieve your password.</p>
            <input type="text" placeholder="Full Name" id="fullname" name="fullname" required>
            <br>
            <input type="email" placeholder="Email" id="email" name="email" required>
            <br>
            <button type="submit">Submit</button>
        </form>
        <p>Remember your password? <a href="signin.php">Sign in</a></p>
    </div>
    </fieldset>
    <center>
</body>
</html>
