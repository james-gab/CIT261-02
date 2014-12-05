<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign&#32;in&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        
        <link href="../css/home_page.css" rel="stylesheet" type="text/css"/>
        
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
        
        <h2>Sign In Page</h2>
        <br>
    <?php
        //Start session
        session_start();	
        //Unset the variables stored in session
        unset($_SESSION['SESS_MEMBER_ID']);
        unset($_SESSION['SESS_FIRST_NAME']);
        unset($_SESSION['SESS_LAST_NAME']);
    ?>
    <form class="reg" name="loginform" action="login_exec.php" method="post">
                
        <fieldset>
            <table>
                <tr>
                    <td class="r">
    <!--the code bellow is used to display the message of the input validation-->
                        <?php
                            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                                echo '<ul class="err">';
                                foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                    echo '<li>',$msg,'</li>';
                                    }
                                echo '</ul>';
                                unset($_SESSION['ERRMSG_ARR']);
                                }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="r">Username</td>
                    <td class="r"><input name="username" type="text" /></td>
                </tr>
                <tr>
                    <td class="r">Password</td>
                    <td><input name="password" type="password" /></td>
                </tr>
                <tr>
                    <td class="r"></td>
                    <td><input name="" type="submit" value="login" /></td>
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
