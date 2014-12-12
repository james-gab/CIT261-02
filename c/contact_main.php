<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/css/meta.php';?>
        <title>Contact&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        
<!--[if lt IE 9]>
        <script src="js/dist/html5shiv.js" type="text/javascript"></script>
    <![endif]-->



         
<!-- calls CSS file -->
<link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
<!-- calls Google google_analyticstracking.js -->
<!--<script src="../../js/google_analyticstracking.js" type="text/javascript"></script>
-->
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
        
        <h2>Contact Page</h2>
        <br>
       
        
       <?php

    if(!empty($reply)){

      echo "<p class='notify'>$reply</p>";

    }

    unset($reply);

?> 
        
        
        
        <form class="contact" method="post" action="index.php" id="contactform">

<fieldset>
    <p>All fields are required.</p> 
        
    <table>
        <tr>
            <td class="r"><label for="firstname">Name&#58; </label></td>
            <td><input type="text" name="firstname" id="firstname" value=" <?php echo $firstname; ?>" ></td>
        </tr>
        <tr>
            <td class="r"><label for="email">Email Address&#58; </label></td>
            <td><input type="email" name="email" id="email" value="<?php echo $email; ?>" ></td>
        </tr>
        <tr>
            <td class="r"><label for="subject">Subject&#58; </label></td>
            <td><input type="text" name="subject" id="subject" value="<?php echo $subject; ?>" ></td>
        </tr>
    </table>

<label for="message">Message</label><br><textarea class="contact" name="message" id="message" ><?php echo $message; ?></textarea><br>

<br>
<p class="f">Security Code</p>
<img src="antispam.php" width="140" height="50" alt="nospam"><br>
 
<p class="e">(Type these characters into the text box below)</p>


<table>
    <tr>
        <td><input name="anti_spam_code" id="anti_spam_code"></td>
        <td><input type="submit" name="action" id="action" value="Send"></td>
    </tr>
</table>



</fieldset>
      
</form> 
         
       
    </main>

    
    <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>

    </footer>
   
    </body>
</html>