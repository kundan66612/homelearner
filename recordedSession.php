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
<html>
<head>
    <title>HomeLearner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="styles.css">
    <link rel="javascript" href="script.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>

        .playlist-container {
          width: 100%;
          margin: 20px auto;
          padding: 20px;
          background-color: #DDFCFC;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          border-radius: 5px;
        }

        .category {
          margin-bottom: 15px;
        }

        .category h2 {
          color: #2003FC;
          border-bottom: 2px solid #ddd;
          padding-bottom: 5px;
        }

        .video-list {
          list-style: none;
          padding: 0;
        }

        .video-item {
          margin: 10px 0;
          padding: 10px;
          background-color: #A9F4FB;
          border-radius: 5px;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }

        .video-title {
          flex: 1;
          margin-right: 10px;
        }

        .video-category {
          font-size: 12px;
          color: #777;
        }
  </style>

</head>
<body>
    <!-- CODE FOR NAVIGATION BAR -->
    <div class="nav1">
        <a href="index.php"><i class="fa-solid fa-house"></i>&nbsp;Home</a>
        <a href="howItsWork.php"><i class="fa-solid fa-handshake"></i>&nbsp;How Its Work?</a>
        <a href="needTutor.php"><i class="fa-solid fa-people-roof"></i>&nbsp;Need Tutor</a>
        <a href="joinAsTutor.php"><i class="fa-solid fa-person-chalkboard"></i>&nbsp;Join As Tutor</a>
        <a href="recordedSession.php"><i class="fa-solid fa-video"></i>&nbsp;Recorded Sessions</a>
        <a href="liveSession.php"><i class="fa-solid fa-chalkboard"></i>&nbsp;Live Session</a>
        <a href="signin.php"><i class="fa-solid fa-circle-user fa-bounce"></i>&nbsp;Log In</a>
    </div>
    <hr>

    <!-- CODE FOR SEARCH BAR -->
    <div class="searchbar-nav">
        <h3>Search Your Favourite Topic Here</h3>
        <div class="search-bar">
            <select>
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
                <!-- Add more city options as needed -->
            </select>
            <input type="text" placeholder="Course...   Topic...   Class...   Faculty...   Subject...">
            <button type="button">Search</button>
        </div>
    </div>
    <hr>

    <div class="playlist-container">
        <div class="category">
        <h2>Web Development</h2>
        <ul class="video-list" id="webDevVideos">
            <!-- Web Development Videos will be dynamically added here using JavaScript -->
            <video width="320" height="240" controls>
            <source src="your_video_file.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </ul>
        </div>

        <div class="category">
        <h2>Data Science</h2>
        <ul class="video-list" id="dataScienceVideos">
            <!-- Data Science Videos will be dynamically added here using JavaScript -->
            <video width="320" height="240" controls>
            <source src="your_video_file.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>

        </ul>
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