<?php
session_start();
if(session_destroy())
{
//    include ['DOCUMENT_ROOT'].'index.php';
//header("Location: index.php");
header("Location: http://iserve.jfcguitars.com/index.php");
}
?>