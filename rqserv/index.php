<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IndexRegistration&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        
        <link href="../css/home_page.css" rel="stylesheet" type="text/css"/>
        

    <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["reg"]["ptype"].value;
    var b=document.forms["reg"]["pname"].value;
    var c=document.forms["reg"]["teaserdesc"].value;
    var d=document.forms["reg"]["fulldesc"].value;
    var e=document.forms["reg"]["contactname"].value;
    var f=document.forms["reg"]["contactnum"].value;
    
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("Project type must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Project name must be filled out");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Short Description must be filled out");
    return false;
    }
    if (d==null || d=="")
    {
    alert("Full Description must be filled out");
    return false;
    }
    if (e==null || e=="")
    {
    alert("Contact Name must be filled out");
    return false;
    }
    if (f==null || f=="")
    {
    alert("Contact Number must be filled out");
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
                                echo '';
                                }
                            if ($remarks=='success'){
                                echo 'Registration Success';
                                }
                        ?>	
                    </div>
                </td>
            </tr>
            
            
            
            <!-- *********** this does not work *************-->
            
            
<form>                  
<select name="users" onchange="$ptype(this.value)">
  <option value="">Select a project type:</option>
  <option value="1">Yard assistance</option>
  <option value="2">In Home Care</option>
  <option value="3">**Make Something up 3**</option>
  <option value="4">**Make Something up 4**</option>
  </select>
</form>
            <!-- *********** END not work *************-->
            
            
            
            <tr>
                <td class="r">Project&#32;Name&#58;</td>
                <td><input type="text" name="pname" /></td>
            </tr>
            <tr>
                <td class="r">Contact&#32;Name&#58;</td>
                <td><input type="text" name="contactname" /></td>
            </tr>
<!--            <tr>
                <td class="r">Project&#32;type&#58;</td>
                <td><input type="text" name="ptype" /></td>
            </tr>-->
            <tr>
                <td class="r">Contact&#32;Number&#58;</td>
                <td><input type="text" name="contactnum" /></td>
            </tr>
            <tr>
                <td class="r">Short&#32;Description&#58;</td>
                <td><textarea class="regprojshort" name="teaserdesc" id="teaserdesc" ><?php echo $teaserdesc; ?></textarea></td>
            </tr>
            <tr>
                <td class="r">Full&#32;Description&#58;</td>
                <td>
                    <textarea class="regprojlong" name="fulldesc" id="fulldesc" ><?php echo $fulldesc; ?></textarea>
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
