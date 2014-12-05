<?php
$mysql_hostname = "localhost";
//$mysql_hostname = "66.147.244.96";
//$mysql_user = "getstar6_iUser";
$mysql_user = "jfcguita_iUser";
$mysql_password = "thinkbigBOY@12345";
//$mysql_database = "getstar6_iserve";
$mysql_database = "jfcguita_iServe";
$prefix = "";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>