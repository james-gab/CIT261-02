<?php


@session_start(); // start session if not started yet

if ($_POST['action'] == 'Send'){

// Collect the data
    
$acceptrules = $_POST['rules'];                 // RSN01 accept rules check box

$projecttitle = $_POST['projecttitle'];         // RSN02 Project Title

$projectteaser = $_POST['projectteaser'];       // RSN02 Project Teaser
        
$projectDescription = $_POST['projectdescription'];     // RSN02 project description

$skillsrequired = $_POST['skillsrequired'];     // RSN02 skills needed
//this will need to have a java script array added to collect additional skill listed in the Plus button.

$projestcategory = $_POST['projectcategory'];   // RSN02 Project Caregory drop down window 

$projectsponsor = $_POST['projectsponsor'];     // RSN03 Project Sponsor field



$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

//$captcha = strtolower($_POST['captcha']);



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