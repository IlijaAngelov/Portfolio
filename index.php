<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="menu.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
    <script src="https://kit.fontawesome.com/8b76652210.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
<?php include ('sendMail.php'); ?>
<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact-section">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header>
    <div id="nav" class="menu-area ul">
        <a class="li" href="http://ilija.atrajkov.com/index.php">
        <img src="/assets/ai-logo.png" alt="AI_logo" height="25vh" width="25vh">
        </a>
        <a class="li" href="#about" name="about">About</a>
        <a class="li" href="#projects" name="projects">Projects</a>
        <a class="li" href="#contact-section" name="contact">Contact</a>
    </div>
</header>
<div id="personal" class="personal">
    <div class="flex-container">
            <div class="about-info">
                <h1 class="uppercase">ilija angelov</h1>
                <div class="line"></div>
                <h2 class="uppercase">web developer</h2>
                <div class="links">
                    <a href="https://www.linkedin.com/in/ilija-angelov-22472413b/" target="_blank" rel="noreferrer"><i class="fab fa-linkedin-in space-it" style="color:white" ></i></a>
                    <a href="https://github.com/IlijaAngelov" target="_blank" rel="noreferrer"><i class="fab fa-github space-it" style="color:white"></i></a>
                    <a href="http://ilija.atrajkov.com/resume.pdf" target="_blank" rel="noreferrer"><i class="far fa-file-alt space-it" style="color:white"></i></a>
                </div>
            </div>

    </div>
</div>
<div id="about" class="about">
    <div class="more-about-myself">
        <h1>About me</h1>
        <p style="font-size: 1.6em;">Hello. My name is <span style="font-weight: bold">Ilija Angelov</span>. </br> I'm a Web Developer with working experience in BackEnd (PHP, MySQL) and FrontEnd (HTML, CSS, Javascript, Bootstrap) techonologies.</p>
    </div>
    <div class="myself">
        <img src="/assets/me.jpg" alt="My picture">
    </div>

</div>
<div id="projects" class="projects">
<h1 style="text-align: center;">Projects</h1>
    <div class="projects-container">
        <div class="project" style="margin-right: 2vh;">
            <h3 style="text-align: center">CMS System</h3>
            <img class="project-image" src="http://ilija.atrajkov.com/cms.png" alt="Basic CMS" style="width: 100%; height: 100%;">
            <p style="text-align: center">CMS made with PHP/SQL for the back-end and some Javascript,CSS,Bootstrap, HTML for front-end.</p>
            <div class="project-links">
                <a href="https://github.com/IlijaAngelov/cms" rel="noreferrer">Github</a>
                <a href="https://codepen.io/ItoAngel/full/jOWpPyx" target="_blank" rel="noreferrer">Live</a>
            </div>
        </div>
        <div class="project" style="margin-right: 2vh;">
            <h3 style="text-align: center">Memory Game</h3>
            <img class="project-image" src="http://ilija.atrajkov.com/Memory Game.png" alt="Basic CMS" style="width: 100%; height: 100%;">
            <p style="text-align: center">Game made with Javascript</p>
            <div class="project-links">
                <a href="https://github.com/IlijaAngelov/memory_game" rel="noreferrer">Github</a>
                <a href="https://codepen.io/ItoAngel/full/jOWpPyx" target="_blank" rel="noreferrer">Live</a>
            </div>
        </div>
        <div class="project">
            <h3 style="text-align: center">Basic Tetris</h3>
            <img class="project-image" src="http://ilija.atrajkov.com/Basic Tetris.png" alt="Basic CMS" style="width: 100%; height: 100%;">
            <p style="text-align: center">Tetris made with Javascript</p>
            <div class="project-links">
                <a href="https://github.com/IlijaAngelov/basic-tetris" rel="noreferrer">Github</a>
                <a href="https://codepen.io/ItoAngel/full/GRoMggB" target="_blank" rel="noreferrer">Live</a>
            </div>
        </div>
    </div>
</div>

<div id="contact-section" class="contact-section">
<h1 style="text-align: center;" >Contact</h1>

    <form id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
        <div class="contact-container">    
            <div class="submit-info">
                <input type="text" name="name"  placeholder="Name" value="<?php echo isset($_POST['name']) ? $name : ''?>">
                <input type="text" name="subject"  placeholder="Subject" value="<?php echo isset($_POST['subject']) ? $subject : ''?>">
                <input type="email" name="email"  placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''?>">
            </div>
            <div class="message">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
        </div>
        <div class="button-div">
            <button type="submit" name="submit" class="button-send">Send</button>
        </div> 
    </form>
</div>
<footer class="footer" style="text-align: center">
    <div style="margin-bottom: 5px; ">Copyright &copy; 2021</div>
</footer>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>