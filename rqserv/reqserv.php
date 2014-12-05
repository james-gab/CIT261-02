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

        <p class="center">Login successfully </p>
        <p class="center">This page is the home, you can put some stuff here......</p>
        <p class="center"><a href="index.php">logout</a></p>
        
        
    <?php
    require_once('../signin/connection.php');
    $id=$_SESSION['SESS_MEMBER_ID'];
    $result3 = mysql_query("SELECT * FROM member where mem_id='$id'");
    while($row3 = mysql_fetch_array($result3))
    {
    $ptype=$row3['ptype'];
    $pname=$row3['pname'];
    $teaserdesc=$row3['teaserdesc'];
    $fulldesc=$row3['fulldesc'];
    $contactname=$row3['contactname'];
    $contactnum=$row3['contactnum'];
    }
    ?>

<!--    $fname=$row3['fname'];
    $lname=$row3['lname'];
    $address=$row3['address'];
    $contact=$row3['contact'];
    $picture=$row3['picture'];
    $gender=$row3['gender'];-->

<!-- +++++++++++++++++++++updated CSS format++++++++++++++++++++++++++++++++++++++++++++ -->

    <table class="fulldesc">
        <tr>
            <td class="r">Your Project Information </td>
            <td><div class="right"><a href="index.php">logout</a></div></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Contact Name:</div></td>
            <td class="r"><?php echo $contactname ?></td>
        </tr>

        <tr>
            <td class="r"><div class="left">Project type:</div></td>
            <td class="r"><?php echo $ptype ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Project Name:</div></td>
            <td class="r"><?php echo $pname ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Contact Number:</div></td>
            <td class="r"><?php echo $contactnum ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Short Description:</div></td>
            <td class="r"><?php echo $teaserdesc ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Full Description: </div></td>
            <td class="r"><?php echo $fulldesc ?></td>
        </tr>
    </table>
    <p class="center"><a href="index.php"></a></p>










    

    
    <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>

    </footer>
   
    </body>
</html>