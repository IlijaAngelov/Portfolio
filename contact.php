<?php

// from the form part of index, not sure which tut
    // $mailSent = mail($to, $subject, $message, $headers);
    
    // $expected = ['name', 'email', 'comment'];
    // $required = ['name', 'email', 'comment'];
    // require('contact.php');

// checkout and maybe try filtering senders email

// assume nothing is suspect
$suspect = false;
// creating a pattern to check senders email/content

// checking if contains the following string 
$pattern = '/Content-Type: |Bcc: |Cc:/i';

// function for suspect emails - recursive function!
function isSuspect($val, $pattern, &$suspect){  // & - passing by reference!
    // if variable is in array, loop through each element
    // and pass it recursively back to the same function
    if(is_array($val)){
        foreach($val as $item){
            isSuspect($item, $pattern, $suspect);
        };
    } else {
        // if one is true, set suspect to true
        if(preg_match($pattern, $val)) {
            $suspect = true;
        }
    }
}

isSuspect($_POST, $pattern, $suspect);
// if(!$suspect){
foreach($_POST as $key => $value) {

    // assign temporary variable and strip whitespace if not an array
    $temp = is_array($value) ? $value : trim($value);

    // if empty and required, add to $missing array
    if(empty($temp) && in_array($key, $required)) {
        $missing[] = $key;
        ${$key} = '';
    } elseif 
        (in_array($key, $expected)) {
            // otherwise, assign to a variable of the same name as $key
            ${$key} = $temp;
        }
    
}

if(in_array($value)){
    $temp = $value;
} else {
    $temp = trim($value);
}





?>