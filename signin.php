
<?php
session_start(); // Start session for user authentication
if(isset($_SESSION['user_id'])) {
    // If the user is already logged in, redirect to the appropriate dashboard
    if ($_SESSION['role'] == 'student') {
        header("Location: student.php");
    } elseif ($_SESSION['role'] == 'teacher') {
        header("Location: tutor.php");
    }
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HomeLearner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: cursive;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #DDFCFC;
        }

        .login-container {
            background-color: #A9F4FB;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bolder;
        }

        button:hover {
            background-color: #45a049;
        }

        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .checkbox {
            display: flex;
            align-items: center;
        }

        .checkbox input {
            margin-right: 5px;
        }

        a {
            text-decoration: none;
            color: #4285f4;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2><i class="fa-solid fa-circle-user fa-fade"></i>&nbsp;Sign-In</h2>
        <form method="post" action="authenticate.php">
            <input type="email" placeholder="Email" id="email" name="email" required>
            <input type="password" placeholder="Password" id="Password" name="password" required>
            <div class="login-options">
                <div class="checkbox">
                    <input type="checkbox" id="rememberMe">
                    <label for="rememberMe">Remember</label>
                </div>
                <a href="forgotpassword.php">Forgot password?</a>
            </div>
            <button type="submit">Sign-In</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign-up</a></p>
    </div>
</body>
</html>