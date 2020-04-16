<?php

// ini_set('display_errors', '1');
$mailSent = mail('ilija.angelov@yahoo.com', 'Mail Test!!!', 'This is a mail test!', 'From: me@example.com');
if($mailSent){
    echo 'Mail Sent!';
} else {
    echo 'Failed!';
}

?>