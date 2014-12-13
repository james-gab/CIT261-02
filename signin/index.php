<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/css/meta.php';?>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'../css/meta.php';?>
        <title>Registration&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        
        <link href="../css/home_page.css" rel="stylesheet" type="text/css"/>
        

    <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["mname"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
    var f=document.forms["reg"]["username"].value;
    var g=document.forms["reg"]["password"].value;
   
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("First name must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Last name must be filled out");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Gender name must be filled out");
    return false;
    }
    if (d==null || d=="")
    {
    alert("address must be filled out");
    return false;
    }
    if (e==null || e=="")
    {
    alert("contact must be filled out");
    return false;
    }
    if (f==null || f=="")
    {
    alert("username must be filled out");
    return false;
    }
    if (g==null || g=="")
    {
    alert("password must be filled out");
    return false;
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
        
        <h2>Registration Page</h2>
        <br>
        
        
        
<!--
    <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
    <td colspan="2">
    <div align="center">
    <?php
    $remarks=$_GET['remarks'];
    if ($remarks==null and $remarks=="")
    {
    echo 'Register Here';
    }
    if ($remarks=='success')
    {
    echo 'Registration Success';
    }
    ?>	
    </div></td>
    </tr>
    <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
    </tr>
    <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
    </tr>
    <tr>
    <td><div align="right">Gender:</div></td>
    <td><input type="text" name="mname" /></td>
    </tr>
    <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
    </tr>
    <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
    </tr>
    <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
    </tr>
    </table>
    </form>
-->
<!-- +++++++++++++++++++++updated CSS format++++++++++++++++++++++++++++++++++++++++++++ -->

    <form class="reg" name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
        <fieldset>
        <table>
            <tr>
                <td>
                    <div align="center">
                        <?php
                            $remarks=$_GET['remarks'];
                            if ($remarks==null and $remarks==""){
                                echo 'Register Here';
                                }
                            if ($remarks=='success'){
                                echo 'Registration Success';
                                }
                        ?>	
                    </div>
                </td>
            </tr>
            <tr>
                <td class="r">First&#32;Name&#58;</td>
                <td><input type="text" name="fname" id="firstname" value="<?php echo $fname;?>"></td>
            </tr>
            <tr>
                <td class="r">Last&#32;Name&#58;</td>
                <td><input type="text" name="lname" /></td>
            </tr>
            <tr>
                <td class="r">Gender&#58;</td>
                <td><input type="text" name="mname" /></td>
            </tr>
            <tr>
                <td class="r">Contact&#32;No&#46;&#58;</td>
                <td><input type="text" name="contact" /></td>
            </tr>
            <tr>
                <td class="r">Username&#58;</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td class="r">Password&#58;</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td class="r"></td>
                <td><input name="submit" type="submit" value="Submit" /></td>
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
