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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>

        .option-bar {
          background-color: #DDFCFC;
          overflow: hidden;
        }

        .user-role-btn {
          float: left;
          display: block;
          color: #020202;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 16px;
          cursor: pointer;
          border: none;
          font-weight: bolder;
        }

        #forStudentBtn {
          background-color: #FCBF05;
          border: 5px solid #FCBF05;
        }

        #forTeacherBtn {
          background-color: #6BCD70;
          border: 5px solid #6BCD70 ;
        }

        .forStudent {
            background-color: #FCEEC4 ;
            border: 5px solid #FCBF05 ;   
        }

        .forTeacher {
            background-color: #CFF4D1;
            border: 5px solid #6BCD70 ;   
        }

        .tree-container {
      width: 100%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .stage {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      box-sizing: border-box;
      border-bottom: 1px solid #ddd;
    }

    .stage-name {
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 10px;
      font-family: cursive;
    }

    .conditions {
      display: flex;
      justify-content: space-between;
      width: 100%;
      font-size: 18px;
      font-family: monospace;
      font-weight: bold;

    }

    .condition {
      flex: 1;
      text-align: center;
      color: #193EFB;
    }

    .tree-connector {
      width: 2px;
      background-color: #FC5C5C;
      height: 80px;
      margin: 0 auto;
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

    <div class="option-bar">
      <button class="user-role-btn" id="forStudentBtn">For Student's</button>
      <button class="user-role-btn" id="forTeacherBtn">For Teacher's</button>
    </div>

    <div  id="forStudentContent" class="forStudent">
        <div class="tree-container">
          <div class="stage" id="stage1">
            <div class="stage-name">Stage 1 - Registration</div>
            <div class="conditions">
              <div class="condition">--> Register As A Student</div>
              <div class="tree-connector"></div>
              <div class="condition"><-- Register As A Parent</div>
            </div>
          </div>

          <div class="stage" id="stage2">
            <div class="stage-name">Stage 2 - Walkthrough</div>
            <div class="conditions">
              <div class="condition">--> Go With Uploaded Videos</div>
              <div class="tree-connector"></div>
              <div class="condition"><-- Ask For Live Sessions</div>
            </div>
          </div>

          <div class="stage" id="stage3">
            <div class="stage-name">Stage 3 - Your Need</div>
            <div class="conditions">
              <div class="condition">--> You Can Search Teachers</div>
              <div class="tree-connector"></div>
              <div class="condition"><-- Post Your Need</div>
            </div>
          </div>
        </div>
    </div>

    <div id="forTeacherContent" class="forTeacher">
        <div class="tree-container">
          <div class="stage" id="stage1">
            <div class="stage-name">Stage 1 - Registration</div>
            <div class="conditions">
              <div class="condition">--> As Part Time</div>
              <div class="tree-connector"></div>
              <div class="condition"><-- As Full Time</div>
            </div>
          </div>

          <div class="stage" id="stage2">
            <div class="stage-name">Stage 2 - Walkthrough</div>
            <div class="conditions">
              <div class="condition">--> Upload Your Videos</div>
              <div class="tree-connector"></div>
              <div class="condition"><-- Schedule Live Sessions</div>
            </div>
          </div>

          <div class="stage" id="stage3">
            <div class="stage-name">Stage 3 - Your Availability</div>
            <div class="conditions">
              <div class="condition">--> Check Students Need</div>
              <div class="tree-connector"></div>
              <div class="condition"><-- Post Your Availability</div>
            </div>
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
                    <li class="list-inline-item"><a href="index.">Home</a></li>
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
