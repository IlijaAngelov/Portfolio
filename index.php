<?php

$missing = [];
$errors = [];

if(isset($_POST['send'])){
    // echo "TUKAA";   
    $to = 'ilija.angelov@yahoo.com';
    $subject = 'example, take 1';

    $mailSent = mail($to, $subject, $message, $headers);
    
    $expected = ['name', 'email', 'comment'];
    $required = ['name', 'email', 'comment'];
    require('contact.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://kit.fontawesome.com/8b76652210.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div id="nav" class="menu-area ul">
        <a class="li" href="http://localhost/portfolio/">
        <img src="/portfolio/assets/ai-logo.png" alt="AI_logo" height="25vh" width="25vh">
        </a>
        <a class="li" href="#about" name="about">About</a>
        <a class="li" href="#projects" name="projects">Projects</a>
        <a class="li" href="#contact-section" name="contact">Contact</a>
    </div>
</header>
<div id="personal" class="personal">
    <div class="flex-container">
        <!-- <div class="home-side">home</div> -->
        <div class="about-info">
            <h1 class="uppercase">ilija angelov</h1>
            <div class="line"></div>
            <h2 class="uppercase">web developer</h2>
        </div>
    </div>
</div>
<div id="about" class="about">    
    <div class="myself">
        <h1>About me</h1>
        <img src="/portfolio/assets/me.jpg" alt="A picture of myself">
        <h2>Ilija Angelov</h2>
    </div>
    <div class="more-about">
        I'm a web developer with little more than 2 years of experience in business integration working at StadiaConnect.
            Working proficiency with html5, css3, javascript, jquery, php, mysql, wordpress.
            Striving on improve my full-stack skills with ES6, Laravel, OOP... 
    </div>
</div>

<div id="projects" class="projects">
<h1 style="text-align: center;">Projects</h1>
    <div class="asd">
        <div class="project">
            <div class="project-image"><img src="/portfolio/assets/tree.jpeg" style="width: 100%;"></div>
            <div class="project-links">
                <a href="github.com" >Github</a>
                <a href="google.com" target="_blank">Live</a>
            </div>
        </div>
        <div class="project">
            <div class="project-image"><img src="/portfolio/assets/tree.jpeg" style="width: 100%;"></div>
            <div class="project-links">
                <a href="github.com" target="_blank">Github</a>
                <a href="google.com" target="_blank">Live</a>
            </div>
        </div>
        <div class="project">
            <div class="project-image"><img src="/portfolio/assets/tree.jpeg" style="width: 100%;"></div>
            <div class="project-links">
                <a href="github.com" target="_blank">Github</a>
                <a href="google.com" target="_blank">Live</a>
            </div>
        </div>
    </div>
</div>

<div id="contact-section" class="contact-section">
<h1 style="text-align: center; margin-top: 15vh;" >Contact</h1>
    <form id="form" action="#" method="POST" >
        <div class="contact1">    
            <div class="submit-info">
                <input type="text" name="name" required placeholder="Name">
                <input type="text" name="subject" required placeholder="Subject">
                <input type="email" name="email"  placeholder="Email">
            </div>
            <div class="message">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
        </div>
        <!-- <input type="submit" name="Send" id="submit" class="send" value="Send"> -->
        <!-- MAKE IT WITH BUTTON, EASIER TO STYLE! -->
        <div class="button-div">
            <button type="submit" class="button-send">Send</button>
        </div> 
    </form>
    <pre>
    <?php if($_POST){
        print_r($_POST);
    } 
    ?>
    </pre>
</div>
<footer class="footer" style="text-align: center">
    <div>selfmade &copy; 2020</divp>
    <div class="links">
    <a href="https://www.linkedin.com/in/ilija-angelov-22472413b/" target="_blank"><i class="fab fa-linkedin-in space-it" style="color:white" ></i></a>  
    <a href="https://github.com/IlijaAngelov" target="_blank"><i class="fab fa-github space-it" style="color:white"></i></a>
    </div>

</footer>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>