<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <a href="reg02.php">Register Page</a>
        <a href="sign02.php">Sign Up</a>
           <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
    </body>
</html>
