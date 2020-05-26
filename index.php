<?php
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['submit'])){ 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Checking required fields
    if(!empty($name) && !empty($email) && !empty($message)){ 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
            $form_message = 'Please use valid email!';
            $form_message_class = 'alert-danger';
        } else {
            $toEmail = 'ilija.angelov@yahoo.com';
            $subject = 'Contact with message: ' .$subject;
            // $body = '<h2>Contact request</h2>
            //         <h4>Name</h4><p>'.$name.'</p>
            //         <h4>Email</h4><p>'.$email.'</p>
            //         <h4>Message</h4><p>'.$message.'</p>';
            $body = '<p>THIS IS IT!</p>';
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers.= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers.= "From: " .$name. "<".$email.">". "\r\n";
            
            if(mail($toEmail, $subject, $body, $headers)){
                $form_message = 'Your email has been sent!';
                $form_message_class = 'alert-success';
            } else {
                $form_message = 'Your email was not sent!';
                $form_message_class = 'alert-danger';
            }
        }
    } else {
        $form_message = 'Please Fill all the required Fields!';
        $form_message_class = 'alert-danger';
    }

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
            </div>
    </div>
</div>
<div id="about" class="about">    
    <div class="myself">
        <h1>About me</h1>
        <img src="/assets/me.jpg" alt="A picture of myself">
        <h2>Ilija Angelov</h2>
    </div>
    <div class="more-about-myself">
        I'm a web developer with little more than 2 years of experience in business integration working at StadiaConnect.
            Working proficiency with html5, css3, javascript, jquery, php, mysql, wordpress.
            I strive to improve my full-stack skills with ES6, Laravel, OOP... 
    </div>
</div>

<!-- Try scrollable -->
<div id="projects" class="projects">
<h1 style="text-align: center;">Projects</h1>
    <div class="projects-container">
        <div class="project">
            <div class="project-image"><img src="/assets/tree.jpeg" style="width: 100%;"></div>
            <div class="project-links">
                <a href="github.com" >Github</a>
                <a href="google.com" target="_blank">Live</a>
            </div>
        </div>
        <div class="project">
            <div class="project-image"><img src="/assets/tree.jpeg" style="width: 100%;"></div>
            <div class="project-links">
                <a href="github.com" target="_blank">Github</a>
                <a href="google.com" target="_blank">Live</a>
            </div>
        </div>
        <div class="project">
            <div class="project-image"><img src="/assets/tree.jpeg" style="width: 100%;"></div>
            <div class="project-links">
                <a href="github.com" target="_blank">Github</a>
                <a href="google.com" target="_blank">Live</a>
            </div>
        </div>
    </div>
</div>

<div id="contact-section" class="contact-section">
<h1 style="text-align: center;" >Contact</h1>

<?php if($form_message != ''): ?>
    <div class="<?php echo $form_message_class; ?>"><?php echo $form_message; ?></div>
<?php endif; ?>
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
    <div>selfmade &copy; 2020</divp>
    <div class="links">
    <a href="https://www.linkedin.com/in/ilija-angelov-22472413b/" target="_blank"><i class="fab fa-linkedin-in space-it" style="color:white" ></i></a>  
    <a href="https://github.com/IlijaAngelov" target="_blank"><i class="fab fa-github space-it" style="color:white"></i></a>
    <a href="http://ilija.atrajkov.com/resume.pdf" target="_blank"><i class="far fa-file-alt space-it" style="color:white"></i></a>
    </div>

</footer>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>