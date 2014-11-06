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
        <!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Register</title>
      <link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
     <header>
        
<!--Logo-->

            <div> 
                <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/logo_header.php'; ?> 
            </div>
       
<!-- header navigation area -->
<!--Calls from file headernavigation.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/headernavigation.php'; ?> 
        </div>
        </header>
    <h1>Help</h1>
    
      <input name="searchTxt" type="text" maxlength="512" id="searchTxt" class="searchField"/>

<script>
    var input = document.getElementById("searchTxt");

    function searchURL() {
         window.location = "http://www.iserve.jfcguitars.com" + input.value;
    }
</script>
    <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>

<p>Help Search Topics</p>
 <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
    </body>
</html>
