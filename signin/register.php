<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Registration&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/css/meta.php';?>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'../css/meta.php';?>
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
    require_once('connection.php');
    $id=$_SESSION['SESS_MEMBER_ID'];
    $result3 = mysql_query("SELECT * FROM member where mem_id='$id'");
    while($row3 = mysql_fetch_array($result3))
    {
    $fname=$row3['fname'];
    $lname=$row3['lname'];
    $address=$row3['address'];
    $contact=$row3['contact'];
    $picture=$row3['picture'];
    $gender=$row3['gender'];
    }
    ?>

        
        
        
<!--        
        
    <table width="398" border="0" align="center" cellpadding="0">
    <tr>
    <td height="26" colspan="2">Your Profile Information </td>
    <td><div align="right"><a href="index.php">logout</a></div></td>
    </tr>
    <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
    </tr>
    <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
    </tr>
    <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $gender ?></td>
    </tr>
    <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $address ?></td>
    </tr>
    <tr>
    <td valign="top"><div align="left">Contact No.: </div></td>
    <td valign="top"><?php echo $contact ?></td>
    </tr>
    </table>
    <p align="center"><a href="index.php"></a></p>

-->

<!-- +++++++++++++++++++++updated CSS format++++++++++++++++++++++++++++++++++++++++++++ -->

    <table class="contact">
        <tr>
            <td class="r">Your Profile Information </td>
            <td><div class="right"><a href="index.php">logout</a></div></td>
        </tr>
        <tr>
<!--
            <td class="r"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
-->
            <td class="r"><div class="left">First Name:</div></td>
            <td class="r"><?php echo $fname ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Last Name:</div></td>
            <td class="r"><?php echo $lname ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Gender:</div></td>
            <td class="r"><?php echo $gender ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Address:</div></td>
            <td class="r"><?php echo $address ?></td>
        </tr>
        <tr>
            <td class="r"><div class="left">Contact No.: </div></td>
            <td class="r"><?php echo $contact ?></td>
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