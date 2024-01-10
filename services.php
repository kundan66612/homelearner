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

        .service-container {
            width: 80%;
            margin: 20px auto;
            background-color: #A9F4FB;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        h3 {
            color: #555;
        }

        p {
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

    <div class="service-container">
    <h2>Our Services</h2>

    <h3>For Students:</h3>
    <ul>
        <li>
            <h3> Find Your Perfect Tutor:</h3>
            <p>Easily browse through a diverse range of qualified and experienced tutors. Filter by subject, grade level, and expertise to find the perfect match for your learning needs.</p>
        </li>
        <li>
            <h3> Online Sessions for Convenience:</h3>
            <p>Enjoy the flexibility of online learning. Schedule and take live sessions with your tutor from the comfort of your home. Our platform provides a seamless and interactive virtual classroom experience.</p>
        </li>
        <li>
            <h3> Recorded Sessions for Review:</h3>
            <p>Every session is recorded, allowing you to revisit concepts or catch up on missed classes. Access your personalized video library for efficient revision and reinforcement of key topics.</p>
        </li>
        <li>
            <h3> Compare Tutors and Sessions:</h3>
            <p>Make informed decisions by comparing tutor profiles and session reviews. See what other students have to say and find the tutor that aligns with your learning style and goals.</p>
        </li>
        <li>
            <h3> Progress Tracking:</h3>
            <p>Monitor your progress with detailed performance reports. Stay on top of your learning journey and identify areas that may need extra attention.</p>
        </li>
        <li>
            <h3> Support and Feedback:</h3>
            <p>Our platform encourages communication between students and tutors. Share feedback, ask questions, and get the support you need to excel in your studies.</p>
        </li>
    </ul>

    <h3>For Teachers:</h3>
    <ul>
        <li>
            <h3> Showcase Your Expertise:</h3>
            <p>Create a comprehensive profile highlighting your qualifications, teaching experience, and areas of expertise. Stand out to potential students by showcasing your unique teaching approach.</p>
        </li>
        <li>
            <h3> Post Vacancies for Home Tutoring:</h3>
            <p>Teachers can post availability for home tutoring sessions, allowing students or parents to connect with you directly. Specify subjects, grade levels, and any additional requirements.</p>
        </li>
        <li>
            <h3> Share Educational Videos:</h3>
            <p>Teachers can upload educational videos covering various topics. This not only helps students with additional learning resources but also establishes you as a knowledgeable and engaging tutor.</p>
        </li>
        <li>
            <h3> Flexible Schedule Management:</h3>
            <p>Easily manage your tutoring schedule. Set your availability, reschedule sessions, and keep track of appointments effortlessly.</p>
        </li>
        <li>
            <h3> Receive and Respond to Inquiries:</h3>
            <p>Get inquiries from students or parents interested in your tutoring services. Respond promptly and efficiently to connect with potential students.</p>
        </li>
        <li>
            <h3> Build Your Reputation:</h3>
            <p>Receive feedback and reviews from students. Build a positive reputation on our platform, making it easier for new students to choose you as their trusted tutor.</p>
        </li>
    </ul>

    <p>Join Home Learner today and experience a personalized and effective online learning journey!</p>
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