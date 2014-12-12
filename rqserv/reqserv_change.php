<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Request&#32;Service&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        <link href="../css/home_page.css" rel="stylesheet" type="text/css"/>
        <style>
            #notify {animation-duration: 3s; animation-name: slidein;}
.notify {animation-duration: 3s; animation-name: slidein;}
p.notify {animation-duration: 3s; animation-name: slidein;}
notify {animation-duration: 3s; animation-name: slidein;}

@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}

            
        </style>
            
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
    
        
        <h2>Register Projects Page</h2>
        <br/>
       
        
        
        
        
        <form class="contact" method="post" action="index.php" id="contactform">

       <?php
    if(!empty($reply)){
      echo "<p class='notify'>$reply</p>";
    }
    unset($reply);
?> 
            
            <!-- *********** this does not work *************-->
            
    
    <fieldset>                  
<select name="ptype" onchange="$ptype(this.value)">
  <option value="">Select a project type:</option>
  <option value="1">Yard Assistance</option>
  <option value="2">In Home Care</option>
  <option value="3">Travel Assistance</option>
  </select>

    <table> 
        <tr>
            <td class="notify">Your Project Information </td>
            <td></td>
        </tr>
        <tr>
            <td class="r"><label for="contactname">Contact&#32;Name:</label></td>
            <td><input type="text" name="contactname" id="contactname" value=" <?php echo $contactname ?>" /></td>
        </tr>

        <tr>
            <td class="r"><label for="pname">Project Name:</label></td>
            <td><input type="text" name="pname" id="pname" value="<?php echo $pname ?>" /></td>
        </tr>
        <tr>
            <td class="r"><label for="contactnum">Contact Number:</label></td>
            <td><input type="text" name="contactnum" id="contactnum" value="<?php echo $contactnum ?>" /></td>
        </tr>
    </table>
        <table>
        <tr>
            <td class="r"><label for="teaserdesc">Short Description:</label></td>
                <td class="regprojshort"><textarea name="teaserdesc" id="teaserdesc" ><?php echo $teaserdesc; ?></textarea></td>
        </tr>
        <tr>
            <td class="r"><label for="fulldesc">Full Description: </label></td>
                <td ><textarea class="regprojlong" name="fulldesc" id="fulldesc" ><?php echo $fulldesc; ?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="action" id="action" value="Send"/></td>
            <td></td>
    </tr>
        </table>
        

<!--    <p class="center"><a href="index.php"></a></p>
-->


</fieldset>
        
    </form>






    

    
    
<!--Calls Footer from file footer.index.php -->
        <div class ="divfooter"> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>

    
   
    </body>
</html>