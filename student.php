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

<?php
// Replace these with your actual database connection details
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "homelearner";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data for students feedback from the database
$studentsql = "SELECT * FROM studentsfeedback";
$studentresult = $conn->query($studentsql);

//SQL query to fetch data for teachers feedback from the database
$teachersql = "SELECT * FROM teachersfeedback";
$teacherresult = $conn->query($teachersql);


// SQL query to fetch data from the database
$sql = "SELECT * FROM teacherspost";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>HomeLearner-Student</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="styles.css">
    <link rel="javascript" href="script.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    <!-- CODE FOR NAVIGATION BAR -->
    <div class="nav1">
        <a href="index.php"><i class="fa-solid fa-house"></i>&nbsp;Home</a>
        <a href="howItsWork.php"><i class="fa-solid fa-handshake"></i>&nbsp;How Its Work?</a>
        <a href="needTutor.php"><i class="fa-solid fa-people-roof"></i>&nbsp;Need Tutor</a>
        <a href="recordedSession.php"><i class="fa-solid fa-video"></i>&nbsp;Recorded Sessions</a>
        <a href="liveSession.php"><i class="fa-solid fa-chalkboard"></i>&nbsp;Live Session</a>
        <a href="logout.php"><i class="fa-solid fa-circle-user fa-bounce"></i>&nbsp;<?php echo $_SESSION['fullname']; ?></a>
    </div>

    <!-- CODE FOR COMPANY INFORMATION -->
    <div class="company">
        <div class="left-heading-logo">
            <img src="images/heading1.jpg"> 
        </div>
        <div class="center-heading-logo">
            <div class="logo"> 
                <img src="images/logo.jpg"> 
            </div>
            <h1 style="font-family: algerian;">HOME-LEARNER</h1>
            <h2>A place where Students and Teachers find each other</h2>
        </div>
        <div class="right-heading-logo">
            <img src="images/heading2.jpg"> 
        </div>
    </div>
    <hr>

    <!-- CODE FOR SEARCH BAR -->
    <div class="searchbar-nav">
        <h3>Search Your Requirement Here</h3>
        <div class="search-bar">
                <!-- 
            <select>
                <option value="city1">- - City - -</option>
                <option value="city1">City 1</option>
                <option value="city2">City 2</option>
                <option value="city3">City 3</option>
                <option value="city4">City 4</option>
            </select>
            <select>
                <option value="city1">- - Class - -</option>
                <option value="city1">Class-12</option>
                <option value="city2">Class-11</option>
                <option value="city3">Class-10</option>
                <option value="city4">Class-9</option>
                <option value="city4">Class-8</option>
                <option value="city4">Class-7</option>
                <option value="city4">Class-6</option>
                <option value="city4">Class-5</option>
                <option value="city4">Class-4</option>
                <option value="city4">Class-3</option>
                <option value="city4">Class-2</option>
                <option value="city4">Class-1</option>
                <option value="city4">Primary</option>
            </select>
                -->
            <input type="text" name="searchquery"placeholder="Course...   Topic...   Class...   Faculty...   Subject...">
            <button type="button" onclick="filterProducts()">Search</button>
        </div>
    </div>
    <hr>

    
    <!-- Advertisement as a Teacher -->
    <h4>Teacher's Availability</h4>
    <hr>

    <div class="category-bar">
        <div class="category" onclick="filterstudentNeeds('all')">All</div>
        <div class="category" onclick="filterstudentNeeds('school_Tuition')">School tuition</div>
        <div class="category" onclick="filterstudentNeeds('competitive_Tuition')">Competitive Tuition</div>
        <div class="category" onclick="filterstudentNeeds('dance_Tuition')">Dance Tuition</div>
        <div class="category" onclick="filterstudentNeeds('music_Tuition')">Music Tuition</div>
        <div class="category" onclick="filterstudentNeeds('elementary')">Elementary</div>
    </div>

    <div class="product-container" id="productContainer">
        <div class="product-items">
        <?php
        // Display fetched data in the product list
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
            <div class="product-item" data-category="<?php echo $row['category']; ?>">
                <div class="student-info">
                    <div class="student-name"><?php echo $row['name']; ?></div>
                </div>
                <div class="requirement-details">
                    <p><strong>Qualification:</strong> <?php echo $row['qualification']; ?></p>
                    <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
                    <p><strong>Note:</strong> <?php echo $row['note']; ?></p>
                </div>
                <div>
                    <button style="background-color:#91F498" id="Seedetails" onclick="window.location.href='details.php'">See-Details</button>
                </div>
            </div>
        <?php
            }
        } else {
            echo "No records found";
        }
        ?>
    </div>
        
        <button id="prevBtn" onclick="changeItem(-1)">&#10094;</button>
        <button id="nextBtn" onclick="changeItem(1)">&#10095;</button>
    </div>

    
    <!-- User's Review Section -->
    <hr>
    <h4>Voices Of Success</h4>
    <hr>
        <div class="review-container">
            <div class="reviews-container">
                <h2>Student's Voice</h2>
                <div class="reviews">

                    <?php
                    // Display fetched data in the product list
                    $reviewCounter = 0; // Initialize the counter
                    if ($studentresult->num_rows > 0) {
                        while ($studentrow = $studentresult->fetch_assoc()) {
                    ?>

                    <div class="user-review">
                        <div class="user-name" style="color:#FC2323"><?php echo $studentrow['name']; ?></div>
                        <div class="user-name" style="color: #6666FF"><?php echo $studentrow['email']; ?></div>
                        <p class="review-text"><?php echo $studentrow['feedback']; ?></p>
                    </div>

                    <?php

                    // Increment the counter
                        $reviewCounter++;

                        // Break the loop after 3 reviews
                        if ($reviewCounter == 3) {
                            break;
                        }
                        }
                    } else {
                        echo "No records found";
                    }
                    ?>
                        

                    <button class="view-more-btn" onclick="window.location.href='review.php'">More Student's Voice</button>
                </div>
             </div>

            <div class="reviews-container">
                <h2>Teacher's Voice</h2>
                <div class="reviews">

                <?php
                // Display fetched data in the product list
                $reviewCounter = 0; // Initialize the counter

                if ($teacherresult->num_rows > 0) {
                    while ($teacherrow = $teacherresult->fetch_assoc()) {
                        ?>
                        <div class="user-review">
                            <div class="user-name" style="color:#FC2323"><?php echo $teacherrow['name']; ?></div>
                            <div class="user-name" style="color: #6666FF"><?php echo $teacherrow['email']; ?></div>
                            <p class="review-text"><?php echo $teacherrow['feedback']; ?></p>
                        </div>
                        <?php

                        // Increment the counter
                        $reviewCounter++;

                        // Break the loop after 3 reviews
                        if ($reviewCounter == 3) {
                            break;
                        }
                    }
                } else {
                    echo "No records found";
                }
                ?>

                <button class="view-more-btn" onclick="window.location.href='review.php'">More Teacher's Voice</button>
            </div>
            </div>
        </div>

        <!-- CODE FOR FOOTER SECTION -->
        <footer>
            <div class="footer-basic">
                <div class="social">
                    <a href="https://www.instagram.com/kundangupta_6/"><i class="icon ion-social-instagram"></i></a>
                    <a href="https://youtu.be/c-BRg5wPceU?si=nYzGc4BiHlc56yqA"><i class="icon ion-social-youtube"></i></a>
                    <a href="https://x.com/_KundanGupta?t=5OABEiAi5bzfAabJShIuQw&s=08"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://www.facebook.com/people/Kundan-Gupta/pfbid0a8ArB59cpsCiudyP1hwMKPqbwTGXUV8ckBiZk7S58roHuEut9xPQCSiWaW62xmSRl/?mibextid=ZbWKwL"><i class="icon ion-social-facebook"></i></a>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="index.php">Home</a></li>
                    <li class="list-inline-item"><a href="aboutus.php">About Us</a></li>
                    <li class="list-inline-item"><a href="services.php">Services</a></li>
                    <li class="list-inline-item"><a href="contact.php">Contact Us</a></li>
                    <li class="list-inline-item"><a href="terms.php">Terms & condition</a></li>
                </ul>
                <p class="copyright">HOME-LEARNER © 2023</p>
            </div>
        </footer>

    <script src="script.js">
    
    </script>
</body>
</html>

