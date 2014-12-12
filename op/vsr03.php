<!DOCTYPE html>
<!--
Project author: gab James.
-->
<html lang="en">


    <head>

        <?php include_once $_SERVER['DOCUMENT_ROOT'].'../css/meta.php';?>
        <title>Service&#32;Opportunities&#32;&#124;&#32;iServe&#46;com</title>
        
<!--[if lt IE 9]>
        <script src="js/dist/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
         
<!-- calls CSS file -->
        <link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
        
        <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

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


<!-- Main body -->
    <main>
        <h2>Service&#32;Opportunities</h2>
        
<!-- *************************change this************************************** -->
        
<form class="serviceform">
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a project type:</option>
  <option value="1">Yard assistance</option>
  <option value="2">In Home Care</option>
  <option value="3">Travel Assistance</option>
  <!--<option value="4">**Make Something up**</option>-->
  </select>
</form>
<br>
<div class = "tablerow" id="txtHint"><b>Project info will be listed here.</b></div>







<!-- *************************************************************** -->

    </main>

    
    <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
        
    </body>
</html>
