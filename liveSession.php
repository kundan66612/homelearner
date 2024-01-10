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
        main {
            width: 100%;
            height: 480px;
            margin: 20px auto;
            padding: 20px;
            background-color:#DDFCFC;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .one-to-one {
            background-color: #27ae60;
        }

        .join-live {
            background-color: #27ae60;
        }

        .workflow-container {
      display: flex;
      justify-content: space-between;
      margin: 20px;
    }

    .step {
      flex: 1;
      text-align: center;
      padding: 20px;
      background-color: #A9F4FB;
      border: 1px solid #ddd;
      border-radius: 20px;
    }

    .step h2 {
        font-family: cursive;
        color: #0606FE;
    }

    .step p {
        font-family: sans-serif;
        color: #050505;
        font-weight: bolder;
    }

    .arrow-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .arrow {
      width: 30px;
      height: 30px;
      background-color: #F80D0D;
      clip-path: polygon(100% 50%, 0 0, 0 100%);
      margin: 0 10px;
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


    <main>
        <h2>Live Sessions</h2>
        <p>How do you want to connect with us?:</p>

        <button class="one-to-one" onclick="OneToOneSession()">Request One-to-One Session</button>
        <button class="join-live" onclick="joinLiveSession()">Join Ongoing Live Session</button>

    <div class="workflow-container">
    <div class="step">
      <h2>Step 1</h2>
      <p>Open Goole Meet</p>
    </div>
    <div class="arrow-container">
      <div class="arrow"></div>
    </div>
    <div class="step">
      <h2>Step 2</h2>
      <p>Paste the meeting link or Code</p>
    </div>
    <div class="arrow-container">
      <div class="arrow"></div>
    </div>
    <div class="step">
      <h2>Step 3</h2>
      <p>Start you learning!</p>
    </div>
  </div>
    </main>




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