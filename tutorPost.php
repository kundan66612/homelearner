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
    <title>Tutor-Post</title>
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
    $name = sanitize_input($_POST["name"]);
    $qualification = sanitize_input($_POST["qualification"]);
    $category = sanitize_input($_POST["category"]);
    $location = sanitize_input($_POST["location"]);
    $email = sanitize_input($_POST["email"]);
    $note = sanitize_input($_POST["note"]);

    // Insert data into the database
    $sql = "INSERT INTO teacherspost (name, qualification, category, location, contactemail, note) 
            VALUES ('$name', '$qualification', '$category', '$location', '$email', '$note')";

    if ($conn->query($sql) === TRUE) {
        header("Location: joinAsTutor.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<div class="container">
    <h2>Tell Us About Your Availability!</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="qualification" required>
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>

        <div class="form-group">
            <label for="email">Contact Email:</label>
            <input type="email" id="emaile" name="email" required>
        </div>

        <div class="form-group">
            <label for="category">category:</label>
            <select name="category" id="category">
              <option value="school_Tuition">school_Tuition</option>
              <option value="competitive_Tuition">competitive_Tuition</option>
              <option value="dance_Tuition">dance_Tuition</option>
              <option value="music_Tuition">music_Tuition</option>
              <option value="elementary">elementary</option>
            </select>
        </div>

        <div class="form-group">
            <label for="note">Special Note:</label>
            <textarea id="note" name="note" rows="4"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
