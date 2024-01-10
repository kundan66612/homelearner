
<?php
session_start(); // Start session for user authentication

$_SESSION['user'] = $user;

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homelearner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

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
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify the password using password_hash() and password_verify()
        if (password_verify($password, $row['password'])) {
            // User authenticated, set session variables
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['fullname'] = $row['fullname'];

            // Redirect to the appropriate dashboard
            if ($_SESSION['role'] == 'student') {
                header("Location: student.php");
            } elseif ($_SESSION['role'] == 'teacher') {
                header("Location: tutor.php");
            }
            exit();
        } else {
            // Incorrect password
            echo "Invalid email or password!";
        }
    } else {
        // User not found
        echo "User not found!";
    }


    $stmt->close();
}

// Close the database connection
$conn->close();
?>
