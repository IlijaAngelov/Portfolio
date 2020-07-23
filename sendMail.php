<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

// error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['submit'])){ 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Checking required fields
    if(!empty($name) && !empty($email) && !empty($message)){ 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
            // echo "Please use valid email!";
                // echo '<script type="text/javascript">toastr.danger('Please use valid email!')</script>';
                // echo '<script type="text/javascript">toastr.danger('Please use valid email!')</script>';
                echo '<script type="text/javascript">toastr.danger(\'Please use valid email!\')</script>';
        } else {
            $mail = new PHPMailer(true);
            // $mail->SMTPDebug = 3;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "ilija.angelov@gmail.com";
            $mail->Password = "Neznam2314.";
            // If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "tls";
            // Set TCP port to connect to
            $mail->Port = 587;

            //from email address and name
            $mail->From = "ilija.angelov@yahoo.com";
            $mail->FromName = "Full Name";
            //To address and name
            $mail->addAddress("scatmankiller@hotmail.com", "Recepient Name");
            //Address to which recepient will reply
            $mail->addReplyTo($email, "Reply to this email!");

            //CC and BCC
            // $mail->addCC("cc@abc.com");
            // $mail->addBCC("bcc@abc.com");

            //Send HTML or Plain text email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = "This is the plain text version of the email content";

            try {
                $mail->send();
                // echo "Message has been sent successfully";
                    echo '<script type="text/javascript">toastr.success(\'Email sent successfully!\')</script>';
                    $_POST = array();
            } catch(Exception $e) {
                echo "Mailer Error:" . $mail->ErrorInfo;
                // print_r(error_get_last());
                    echo '<script type="text/javascript">toastr.danger(\'There was a problem sending the email!\')</script>';
            }

            // $toEmail = 'ilija.angelov@yahoo.com';
            // $subject = 'Contact with message: ' .$subject;
            // $body = '<h2>Contact request</h2>
            //         <h4>Name</h4><p>'.$name.'</p>
            //         <h4>Email</h4><p>'.$email.'</p>
            //         <h4>Message</h4><p>'.$message.'</p>';
            // $body = '<p>THIS IS IT!</p>';
            // $headers = "MIME-Version: 1.0" ."\r\n";
            // $headers.= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            // $headers.= "From: " .$name. "<".$email.">". "\r\n";
            
        }
    } else {
        echo '<script type="text/javascript">toastr.info(\'Please fill all the required fields!\')</script>';
    }

}
?>