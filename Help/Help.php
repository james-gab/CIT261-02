<?php
if(isset($_GET['submit'])){
  if(empty($_GET['query'])){
echo "Enter a search term";
  }

$query=$_GET['query'];
echo $query;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Help</title>
        <link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Register</title>
      <link href="../css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
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
    <h1>Register</h1>
    <form name="registration">
        <label>First Name:</label><br/>
        <input name="First Name" type="text" required="required">
        <label>Last Name:</label><br/>
        <input name="Last Name" type="text" required="required">
        <br/>
        <label>Password:</label><br/>
        <input name="password" type="password" required="required"><br/>
        <label>Email:</label><br/>
        <input name="email" type="email" required="required"><br/>
        <input type="submit" value="Register">
        <label>Mobile Number:</label><br/>
        <input name="Mobile Number" type="text" required="required">
        <br/>
       </form>
    <input type="checkbox" name="option1" value="Are You Over 18?"> Are You Over 18?<br>
    <input type="radio" name="group1" value="Male"> Male
<input type="radio" name="group2" value="Female" checked> Female<br>
    Already have an account? <a href="sign2.html">Login</a>
    <button type="button">Create Account</button>
    <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
</body>
</html>
     <form action="" method="GET">
        <input type="text" name="query" />
        <input type="submit" name="submit" value="Search" />
    </form>
<p>Help Search Topics</p>
 <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
    </body>
</html>
