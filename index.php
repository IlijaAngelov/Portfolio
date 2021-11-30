<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
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
        <a class="li" href="#personal">
        <img src="assets/favicon-32x32.png" alt="AI_logo">
        </a>
        <a class="li" href="#about" name="about">About</a>
        <a class="li" href="#projects" name="projects">Projects</a>
        <a class="li" href="#contact-section" name="contact">Contact</a>
    </div>
</header>
<div id="personal" class="personal">
    <div>
        <div class="about-info">
            <h1>Hi, I'm Ilija Angelov</h1>
            <div class="line"></div>
            <h2 class="uppercase">web developer</h2>
            <div class="links">
                <a href="https://www.linkedin.com/in/ilija-angelov-22472413b/" target="_blank" rel="noreferrer"><i class="fab fa-linkedin-in" ></i></a>
                <a href="https://github.com/IlijaAngelov" target="_blank" rel="noreferrer"><i class="fab fa-github"></i></a>
                <a href="http://ilija.atrajkov.com/resume.pdf" target="_blank" rel="noreferrer"><i class="far fa-file-alt"></i></a>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about">
    <div class="more-about-myself">
        <h3>Web Developer based in Strumica, Macedonia</h3>
        <p> Working with WAMP stack on my current job. I strive to improve and master my programming skills with reading books and doing side projects.</p>
        <p>I also have a strong interest in the TALL stack, especially experiencing Laravel and Tailwind.</p>
    </div>
    <div>
        <img src="assets/me.jpg" alt="My picture">
    </div>
</div>

<div id="projects" class="projects">
    <div class="projects-container">
        <div class="project">
            <div id="project1" class="project">
                <div>
                    <img id="cmsProject" class="project-image" src="assets/cms.png" alt="Basic CMS">
                </div>
            </div>
            <div class="project-links">
                <a href="https://github.com/IlijaAngelov/cms" target="_blank" rel="noreferrer">Github</a>
                <a href="http://blog.ilija.atrajkov.com/" target="_blank" rel="noreferrer">Live</a>
            </div>
        </div>
        <div class="project">
            <div id="project2" class="project">
                <div>
                    <img id="memoryGame" class="project-image" src="assets/Memory Game.png" alt="Basic Memory Game">
                </div>
            </div>
            <div class="project-links">
                <a href="https://github.com/IlijaAngelov/memory_game" target="_blank" rel="noreferrer">Github</a>
                <a href="https://codepen.io/ItoAngel/full/jOWpPyx" target="_blank" rel="noreferrer">Live</a>
            </div>
        </div>
        <div class="project">
            <div id="project3" class="project">
                <div>
                    <img id="basic_tetris" class="project-image" src="assets/Basic Tetris.png" alt="Basic Tetris">
                </div>
            </div>
            <div class="project-links">
                <a href="https://github.com/IlijaAngelov/basic-tetris" target="_blank" rel="noreferrer">Github</a>
                <a href="https://codepen.io/ItoAngel/full/GRoMggB" target="_blank" rel="noreferrer">Live</a>
            </div>
        </div>
    </div>
</div>

<div id="contact-section" class="contact-section">
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

<footer>
    <div>Copyright &copy; <?php echo date('Y', time()); ?></div>
</footer>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>