<?php


@session_start(); // start session if not started yet

if ($_POST['action'] == 'Send'){

// Collect the data

$contactname = $_POST['contactname'];

$ptype = $_POST['ptype'];

$pname = $_POST['pname'];

$contactnum = $_POST['contactnum'];

$teaserdesc = $_POST['teaserdesc'];

$fulldesc = $_POST['fulldesc'];





} 

if(empty($contactname) || empty($ptype) || empty($pname) || empty($contactnum) || empty($teaserdesc) || empty($fulldesc)) {
  $reply = 'Sorry, one or more fields are empty. All fields are required.';
  include 'reqserv_change.php';
  exit;
}

// Assemble the message

include_once 'code_exec.php';

  $result = include_once 'session.php';
    
    
    
  

// Let the client know what happened

  if ($result == TRUE) {

    $reply = "Thank you $contactname for contacting me.";

    unset($contactname);

    unset($ptype);

    unset($pname);

    unset($contactnum);

    unset($teaserdesc);

    unset($fulldesc);

    include 'reqserv_change.php';

    exit;

  } else {

    $reply = "Sorry $contactname but there was an error and the Project could not be saved.";

    unset($contactname);

    unset($ptype);

    unset($pname);

    unset($contactnum);

    unset($teaserdesc);

    unset($fulldesc);

    include 'reqserv_change.php';

    exit;

  }








  ?>