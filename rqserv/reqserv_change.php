<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Request&#32;Service&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        <link href="../css/home_page.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            <!--
            .style1 {
                font-size: 36px;
                font-weight: bold;
            }
            -->
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

        
 

<!-- +++++++++++++++++++++updated CSS format++++++++++++++++++++++++++++++++++++++++++++ -->

    <form class="reg" name="reg" action="index.php" onsubmit="return validateForm()" method="post">
        <fieldset>
        <table>
            <tr>
                <td>
                    <div align="center">
                        <?php
                            $remarks=$_GET['remarks'];
                            if ($remarks==null and $remarks==""){
                                echo '';
                                }
                            if ($remarks=='success'){
                                echo 'Project Registration Success';
                                }
                        ?>	
                    </div>
                </td>
            </tr>
            
            
            
            <!-- *********** this does not work *************-->
            
    
    <form>                  
<select name="ptype" onchange="$ptype(this.value)">
  <option value="">Select a project type:</option>
  <option value="1">Yard assistance</option>
  <option value="2">In Home Care</option>
  <option value="3">**Make Something up 3**</option>
  <option value="4">**Make Something up 4**</option>
  </select>
</form>


    <table class="fulldesc"> 
        <tr>
            <td class="r">Your Project Information </td>
        </tr>
        <tr>
            <td class="r"><label for="contactname">Contact&#32;Name:</label></td>
            <td class="r"><input type="text" name="contactname" id="contactname" value=" <?php echo $contactname ?>"</td>
        </tr>

        <tr>
            <td class="r"><label for="pname">Project Name:</label></td>
            <td class="r"><input type="text" name="pname" id="pname" value="<?php echo $pname ?>"</td>
        </tr>
        <tr>
            <td class="r"><label for="contactnum">Contact Number:</label></td>
            <td class="r"><input type="text" name="contactnum" id="contactnum" value="<?php echo $contactnum ?>"</td>
        </tr>
        <tr>
            <td class="r"><label for="left">Short Description:</label></td>
                <td><textarea class="regprojshort" name="teaserdesc" id="teaserdesc" ><?php echo $teaserdesc; ?></textarea></td>
        </tr>
        <tr>
            <td class="r"><label for="left">Full Description: </label></td>
                <td><textarea class="regprojlong" name="fulldesc" id="fulldesc" ><?php echo $fulldesc; ?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="action" id="action" value="Send"></td>
    </tr>
        
    </table>
<!--    <p class="center"><a href="index.php"></a></p>
-->


</fieldset>
        
    </form>






    

    
    <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>

    </footer>
   
    </body>
</html>