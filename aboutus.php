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

        .aboutUsContainer {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #050505;
            border-radius: 10px;
            background-color: #A9F4FB;
        }

        h1 {
            color: #333;
        }

        .aboutUsDescription {
            color: #666;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
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

    <div class="aboutUsContainer">
        Welcome to <h2>HOME LEARNER</h2>, where a Student find his/her best home tutor and a Teacher can post and find Students! We are more than just a company; we are a team of dedicated professionals committed to delivering unparalleled solutions and services to meet the evolving needs of our clients.

        <h3>Our Story</h3>
        Established in Dec 2023, HOME LEARNER has emerged as a trailblazer in the Education. What sets us apart is our unwavering dedication to pushing the boundaries of what's possible. From our humble beginnings to our current standing as a leader in the industry, our journey has been defined by a passion for innovation, a commitment to quality, and a relentless pursuit of Student and Teacher satisfaction.

        <h3>Our Mission</h3>
        At the core of HOME LEARNER is a simple yet powerful mission: to empower our clients with cutting-edge solutions that drive success. We believe in harnessing the power of technology to transform businesses and elevate them to new heights. Our mission is not just about delivering products or services; it's about creating lasting partnerships and contributing to the success stories of our clients.

        <h3>Core Values</h3>
        Innovation: We thrive on innovation and continuously seek new and better ways to solve challenges.
        Integrity: We conduct business with the utmost integrity, earning the trust of our clients and partners.
        Excellence: We are committed to excellence in everything we do, from the quality of our products to the level of service we provide.
        Collaboration: We believe in the power of collaboration, both within our team and with our clients, to achieve shared goals.
        Customer-Centric: Our customers are at the heart of what we do. We listen, understand, and tailor our solutions to meet their unique needs.
        What We Offer
        From find home tutor to topic wise one-to-one session, our diverse range of offerings is designed to cater to the dynamic needs of businesses in today's fast-paced world. We combine technical expertise with a customer-centric approach to deliver solutions that not only meet but exceed expectations.

        <h3>Meet the Team</h3>
        Behind every success story at HOME LEARNER is a team of talented individuals driven by a shared vision. Our team comprises experts in Teaching,  each contributing their unique skills and perspectives to create a collaborative and innovative work environment.

        <h3>Join Us on Our Journey</h3>
        Whether you're a potential client, partner, or future team member, we invite you to join us on our journey. Explore our website to learn more about our offerings, read Student's and Teacher's success stories, and discover how HOME LEARNER can be the catalyst for your growth.

        Thank you for considering HOME LEARNER. We look forward to the opportunity to work together and create a future of success and innovation.
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
                    <li class="list-inline-item"><a href="terms.php">Terms & condition</a></li>
                </ul>
                <p class="copyright">HOME-LEARNER © 2023</p>
            </div>
        </footer>

    <script src="script.js">
    
    </script>
</body>
</html>