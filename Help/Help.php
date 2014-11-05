<?php
if(isset($_GET['submit'])){
  if(empty($_GET['query'])){
echo "Enter a search term";
  }

$query=$_GET['query'];
echo $query;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Help</title>
        <link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
     <form action="" method="GET">
        <input type="text" name="query" />
        <input type="submit" name="submit" value="Search" />
    </form>
<p>Help Search Topics</p>
    </body>
</html>
