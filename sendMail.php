<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$date = new DateTime();
$date->setTimeZone(new DateTimeZone('Europe/Skopje'));

// error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['submit'])){ 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Checking required fields
    if(!empty($name) && !empty($email) && !empty($message)){ 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
                echo '<script type="text/javascript">toastr.danger(\'Please use valid email!\')</script>';
        } else {
            $mail = new PHPMailer(true);
	     // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = "smtp.office365.com";
            $mail->SMTPAuth = true;
            $mail->Username = "*********";
            $mail->Password = "******";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

	    $mail->setFrom('********', "$name - Submitted the Form");
	    $mail->addAddress($email, $name);
	    $mail->addReplyTo('********', $name);
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

            //Send HTML or Plain text email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = "This is the plain text version of the email content";

            try {
                $mail->send();
                if($date->format("D") === 'Sat' || $date->format("D") === 'Sun') {
                    echo '<script type="text/javascript">toastr.success(\'Email sent successfully! It is weekend! I will get back to you as soon as possible. \')</script>';
                } else {
                    if($date->format("H") >= 21 || $date->format("H") <= 9){
                        echo '<script type="text/javascript">toastr.success(\'Email sent successfully! I might be sleeping! I will get back to you in few hours.\')</script>';
                    } else {
                        echo '<script type="text/javascript">toastr.success(\'Email sent successfully! I will get back at you shortly!\')</script>';
                    }
                }
                    $_POST = array();
            } catch(Exception $e) {
                echo "Mailer Error:" . $mail->ErrorInfo;
                echo '<script type="text/javascript">toastr.danger(\'There was a problem sending the email!\')</script>';
            } 
           
        }
    } else {
        echo '<script type="text/javascript">toastr.info(\'Please fill all the required fields!\')</script>';
    }

}
?>
