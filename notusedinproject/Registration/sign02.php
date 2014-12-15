<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Sign in 2</title>
      <link href="../../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
      <!--Stylesheets-->
<link href="../css/style.css" rel="stylesheet" type="text/css" />
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
Do not already have an account?  .<a href="reg02.php">Create Account</a>

 
<!--bg gradient--><div></div><!--END bg gradient-->
<footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
</body>
</html>
