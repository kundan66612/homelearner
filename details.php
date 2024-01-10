<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login page or take appropriate action
    header('Location: signin.php');
    exit();
}

// User is logged in, continue with the page logic
$user = $_SESSION['user'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #DDFCFC;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #FCFCEB;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 500px;
            height: 600px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .detail-product-item {
            max-width: 450px;
            max-height: 550px;
            background-color: #FCFCEB;
            margin:20px 20px 10px 20px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Post-details</title>
</head>
<body>

<div class="container">
    <h2>Here is the all details!</h2>
    <div class="product-items">

            <div class="detail-product-item" data-category="">
                <div class="student-info">
                    <div class="student-name"></div>
                </div>
                <div class="requirement-details">
                    <p><strong>Category:</strong><span id="category"></p>
                    <p><strong>Location:</strong><span id="location"></p>
                    <p><strong>Email:</strong><span id="email"></p>
                    <p><strong>Note:</strong><span id="note"></p>
                </div>
                <div>
                    <button style="background-color:#91F498" id="backtohome" onclick="window.location.href='index.php'">Back To Home</button>
                </div>
            </div>
            
        </div>
</div>

</body>
</html>
