    <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "homelearner";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Function to sanitize user input
        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Process form data when the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize and validate input data
            $fname = sanitize_input($_POST["fullname"]);
            $email = sanitize_input($_POST["email"]);
            $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Use BCRYPT for consistent hashing
            $enteredPassword = trim($password);
            $role = sanitize_input($_POST["userRole"]);

    
            
            // Insert data into the database
            $sql = "INSERT INTO users (fullname, email, password, role) VALUES ('$fname', '$email', '$enteredPassword', '$role')";

            if ($conn->query($sql) === TRUE) {
                header("Location: signin.php");
        exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
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
            width: 400px;
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
            margin-top: 10px;
            margin-right: 100px;
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

        .user-role {
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .user-role label {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2><i class="fa-solid fa-circle-user fa-fade"></i>&nbsp;Sign-Up</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="user-role">
                <label for="student">Student</label>
                <input type="radio" id="student" name="userRole" value="student" required>
                <label for="teacher">Teacher</label>
                <input type="radio" id="teacher" name="userRole" value="teacher" required>
            </div>
            <input type="text" placeholder="Full Name" id="fullname" name="fullname" required>
            <input type="email" placeholder="Email" id="email" name="email" required>
            <input type="password" placeholder="Password" id="password" name="password" required>
            
            <button type="submit">Sign-Up</button>
        </form>
        <p>Already have an account? <a href="signin.php">Sign-In</a></p>
    </div>


</body>
</html>
