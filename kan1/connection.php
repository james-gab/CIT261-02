<?php
$mysql_hostname = "localhost";
$mysql_user = "getstar6_iUser";
$mysql_password = "thinkbigBOY@12345";
$mysql_database = "getstar6_iserve";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>