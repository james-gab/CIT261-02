<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
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
    <body>
        <div>
<!--Project Sponsor--><input name="projectsponsor" type="text" placeholder="Project Sponsor" />
<fieldset>
<form>
<li>
    <ul>
                    <li><label for="taMessage">Message</label></li>
                    <li><textarea name="taMessage" id="taMessage" onfocus="this.value='';this.onfocus=null" cols="40" rows="10">Sponsor Description</textarea></li>
                    <li><label for="submit">&nbsp;</label><input type="submit" name="submit" id="submit" value="send"></li>
                </ul>
            </fieldset>
        </form>
<!--Sponsor Website--><input name="sponsorweb" type="url" placeholder="Sponsor Website" />

<!--Contact Name--><input name="contactname" type="text" placeholder="Contact Name" />
<!--Phone Number--><input name="phonenumber" type="number" placeholder="Phone Number" />

<!--Email address--><input name="email" type="text" placeholder="email" />
</div>
        <div>
            <!--back button--><input type="submit" name="submit" value="Back" />
            <!--submit--><input type="submit" name="submit" value="review project" />
        </div>
          <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
<div>
    <input type="checkbox" name="option1" value="Designate Project Sponsor"> Designate Project Sponsor
    <input type="checkbox" name="option2" value="Designate Project Admin"> Designate Project Admin
</div>
    </footer>
    </body>
</html>
