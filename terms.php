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
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #DDFCFC;
    }

    .terms-container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #A9F4FB;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      color: #333;
    }

    p {
      line-height: 1.5;
      color: #666;
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

    <div class="terms-container">
    <h1>Terms and Conditions</h1>

    <h2>Introduction</h2>
    <p>Welcome to Home Learner. By using our website, you agree to comply with and be bound by the following terms and conditions. If you disagree with any part of these terms, please do not use our services.</p>

    <h2>Services</h2>
    <p>Home Learner provides a platform for connecting students with tutors. We do not endorse or guarantee the quality of services provided by tutors. Users are responsible for evaluating and selecting suitable tutors based on their own criteria.</p>

    <h2>User Accounts</h2>
    <p>Users are required to create an account to access certain features of the website. You are responsible for maintaining the confidentiality of your account information and agree to notify us immediately of any unauthorized use of your account.</p>

    <h2>Privacy Policy</h2>
    <p>Our Privacy Policy outlines how we collect, use, and disclose your personal information. By using our website, you consent to the terms of our Privacy Policy.</p>

    <h2>Code of Conduct</h2>
    <p>Users agree to conduct themselves in a respectful and professional manner when using Home Tutor Finder. Any violation of our code of conduct may result in the suspension or termination of your account.</p>

    <h2>Limitation of Liability</h2>
    <p>We are not liable for any direct, indirect, incidental, special, or consequential damages that may result from the use or inability to use our services, including but not limited to any errors or omissions in any content.</p>

    <h2>Changes to Terms</h2>
    <p>We reserve the right to modify or replace these terms at any time. It is your responsibility to check the terms periodically for changes. Your continued use of the website after the posting of any changes constitutes acceptance of those changes.</p>

    <h2>Contact Information</h2>
    <p>If you have any questions about these terms, please contact us at support@queryhomelearner.com</p>
  </div>


    <hr>
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
                    <li class="list-inline-item"><a href="terms.php">Terms & Condition</a></li>
                </ul>
                <p class="copyright">HOME-LEARNER © 2023</p>
            </div>
        </footer>

    <script src="script.js">
    
    </script>
</body>
</html>