<!DOCTYPE html>

<html lang="en">
    
    <head>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/css/meta.php';?>
        <title>Home&#32;page&#32;&#124;&#32;iServe&#46;com</title>
        
<!--[if lt IE 9]>
        <script src="js/dist/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
 

  

         
<!-- calls CSS file -->
<link href="css/home_page.css" rel="stylesheet" type="text/css" media="screen" />
        
        
<!-- calls Google google_analyticstracking.js -->
<!--        <script src="js/google_analyticstracking.js" type="text/javascript"></script>
-->
<script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>
    </head>
    
    
    <body>
        
        <header>
        
<!--Logo-->

            <div > 
                
                <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/logo_header.php'; ?> 
            </div>
       
<!-- header navigation area -->
<!--Calls from file headernavigation.php -->
        <div > 
        
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/headernavigation.php'; ?> 
        </div>



        </header>




<!-- Main body -->
    <main>
        <h1>iServe Home Page</h1>
        <p></p>
        <!--<p>Testing Home page 2 Under Construction the site will be available soon.</p>-->
        <p class="homepg">iServe<br>Your source for serving others!</p>
        
<!--        <a href="image/index/home_0987.png"><img class="two" src="/image/index/home_0987.gif" alt="Jim Chapman"/></a>
    -->    
    <p class="homepg">
        <!--iServe is here to help you serve.-->
        <br>Select Sign In to get started.<br><br>Don't have an account yet? <br>Choose the Registration button and sign up now.<!-- place a welcome statement here -->    </p>
        
<!--        
    <div>           
            <p class="buttonwrappermain">
                    <a class="boldbuttons01" href="op/vsr03.php"><span>Seeking Service</span></a> 
            </p><br>
            <p class="buttonwrappermain">
                    <a class="boldbuttons01" href="/Help/Help.php" ><span>HELP!!!</span></a>
            </p><br>
            <p class="buttonwrappermain">
                    <a class="boldbuttons01" href="" ><span>About</span></a>
            </p><br>
            <p class="buttonwrappermain">
                    <a class="boldbuttons01" href="signin/index.php" ><span>Sign In(index)</span></a>
            </p><br>
            <p class="buttonwrappermain">
                    <a class="boldbuttons01" href="signin/register.php" ><span>register</span></a>
            </p><br>
            <p class="buttonwrappermain">
                    <a class="boldbuttons01" href="signin/sign_in.php" ><span>Sign In</span></a>
            </p><br>
            <p class="buttonwrappermain">
                <a class="boldbuttons01" href="rqserv/reqserv_change.php" ><span>Register Project</span></a> 
            </p><br>
            <p class="buttonwrappermain">
                    <a class="boldbuttons01" href="/c/contact_main.php" ><span>Contact</span></a>
            </p>
    </div>
            --><br><br>
            <h1>A Message from President Uchtdorf</h1><br>
            <p class="center1">President Uchtdorf cautioned the world is full of self justification and narcissism, worldly values stress we look out for our own self interests. We are seeing a generation of all about me individuals with little care for others and their plight. The Lord however has stressed caring for the poor and needy is one of the Four duties of the church as found in Doctrine and Covenants section 58 where we are issued a call to serve and are expected to answer. </p>
            
            
       
            
            <p><button onclick="clickCounter()" type="button">Click me! for Local Storage</button></p>
<div id="result"></div>
<p>Click the button to see the counter increase for an example of local storage.</p>
    </main>

    
    <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
            
        </div>
    </footer>
        
    </body>
</html>
