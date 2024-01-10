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
            background-color: #A9F4FB;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #FFFDDA;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Feedback-Post</title>
</head>
<body>

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
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return mysqli_real_escape_string($conn, $data);
}

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $UserRole = sanitize_input($_POST["UserRole"]);
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $Feedback = sanitize_input($_POST["Feedback"]);

    // Insert data into the database
    if($UserRole == "student") {
        $sql = "INSERT INTO studentsfeedback (name, email, Feedback) 
            VALUES ('$name', '$email', '$Feedback')";
    }else {

        $sql = "INSERT INTO teachersfeedback (name, email, Feedback) 
            VALUES ('$name', '$email', '$Feedback')";  
    }      

    if ($conn->query($sql) === TRUE) {
        header("Location: review.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<div class="container">
    <h2>Tell Us, What likes you most!</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <div class="form-group">
            <label for="UserRole">UserRole:</label>
            <select name="UserRole" id="UserRole">
              <option value="student">Student</option>
              <option value="teacher">Teacher</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="Feedback">Feedback:</label>
            <input type="Feedback" id="Feedback" name="Feedback" required>
        </div>


        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
