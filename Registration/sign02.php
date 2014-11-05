<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Sign in 2</title>
      <link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
      <!--Stylesheets-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="fonts/pacifico/stylesheet.css" rel="stylesheet" type="text/css" />
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
 
<!--Scripts-->
<script type="text/javascript" src=""></script>
<!--Sliding icons-->
<script type="text/javascript">
$(document).ready(function() {
$(".username").focus(function() {
$(".user-icon").css("left","-48px");
});
$(".username").blur(function() {
$(".user-icon").css("left","0px");
});
 
$(".password").focus(function() {
$(".pass-icon").css("left","-48px");
});
$(".password").blur(function() {
$(".pass-icon").css("left","0px");
});
});
</script>
<div id="wrapper">
<!--Sliding icons-->
<div></div>
<div></div>
<!--END Sliding icons-->
 
<!--login form inputs-->
<form name="login-form" action="" method="post">
 
<!--Header-->
<div>
<h1>Login Form</h1>
<span>Please login or if you don't have an account, you can Register!</span>
</div>
<!--END header-->
 
<!--Input fields-->
<div>
<!--USERNAME--><input name="username" type="text" placeholder="Username" /><!--END USERNAME-->
<!--PASSWORD--><input name="password" type="password" placeholder="Password" /><!--END PASSWORD-->
</div>
<!--END Input fields-->
 
<!--Buttons-->
<div>
<!--back button--><input type="submit" name="submit" value="Back" /><!--END Login button-->
<!--signin button--><input type="submit" name="submit" value="Sign " /><!--END Register button-->
</div>
<!--END Buttons-->
 
</form>
<!--end login form-->
 
</div>
 
<!--bg gradient--><div></div><!--END bg gradient-->
<footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
</body
</html>
