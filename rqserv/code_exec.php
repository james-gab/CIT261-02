
<?php

session_start();
include('../signin/connection.php');
$ptype = $_POST['ptype'];
$pname = $_POST['pname'];
$teaserdesc = $_POST['teaserdesc'];
$fulldesc = $_POST['fulldesc'];
$contactname = $_POST['contactname'];
$contactnum = $_POST['contactnum'];
mysql_query("INSERT INTO project(ptype, pname, teaserdesc, fulldesc, contactname, contactnum)VALUES('$ptype', '$pname', '$teaserdesc', '$fulldesc', '$contactname', '$contactnum')");
header("location: index.php?remarks=success");
mysql_close($con);
?>