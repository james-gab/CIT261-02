<?php


@session_start(); // start session if not started yet

if ($_POST['action'] == 'Send'){

// Collect the data

$firstname = $_POST['firstname'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$captcha = strtolower($_POST['captcha']);



} 

if(empty($firstname) ||       empty($email) ||         empty($subject) ||         empty($message)) {
  $reply = 'Sorry, one or more fields are empty. All fields are required.';
  include 'contact_main.php';
  exit;
}

else if ($_SESSION['AntiSpamImage'] != $_REQUEST['anti_spam_code']) {
  // set antispam string to something random, in order to avoid reusing it once again
  $_SESSION['AntiSpamImage'] = rand(1,9999999);

  // here you add code to let user know incorrect code entered
  $reply = 'The Security answer did not match, please try again.';
  include 'contact_main.php';

  exit;
 
} 

else{
    // set antispam string to something random, in order to avoid reusing it once again
  $_SESSION['AntiSpamImage'] = rand(1,9999999);
  
  




// Assemble the message

    $finalmessage = "Name: $firstname \n";

  $finalmessage .= "Email: $email \n";

  $finalmessage .= "Subject: $subject \n";

  $finalmessage .= "Message: \n $message"; 

// Send the message

  $to = 'jam12012@byui.edu';

  $from = "From: $email";

  $result = mail($to, $subject, $finalmessage, $from); 

// Let the client know what happened

  if ($result == TRUE) {

    $reply = "Thank you $firstname for contacting me.";

    unset($firstname);

    unset($email);

    unset($subject);

    unset($message);

    include 'contact_main.php';

    exit;

  } else {

    $reply = "Sorry $firstname but there was an error and the message could not be sent.";

    unset($firstname);

    unset($email);

    unset($subject);

    unset($message);

    include 'contact_main.php';

    exit;

  }
}







  ?>