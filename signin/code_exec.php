
<?php

session_start();
include('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];
mysql_query("INSERT INTO member(fname, lname, gender, contact, username, password)VALUES"
        . "('$fname', '$lname', '$mname', '$contact', '$username', '$password')");
//include'http://iserve.jfcguitars.com/signin/home.php'
//include'http://iserve.jfcguitars.com/index.php'

header("location: home.php?remarks=success");
mysql_close($con);
?>