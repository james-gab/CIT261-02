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
    
    <input name="searchTxt" type="text" maxlength="512" id="searchTxt" class="searchField"/>

<script>
    var input = document.getElementById("searchTxt");

    function searchURL() {
         window.location = "http://www.iserve.jfcguitars.com" + input.value;
    }
</script>
<?Php
$todo=$_POST['todo'];
if(isset($todo) and $todo=="submit"){
$month=$_POST['month'];
$dt=$_POST['dt'];
$year=$_POST['year'];
$date_value="$month/$dt/$year";
echo "mm/dd/yyyy format :$date_value<br>";
$date_value="$year-$month-$dt";
echo "YYYY-mm-dd format :$date_value<br>";
}
//month 
?>
<form method=post name=f1 action=''><input type=hidden name=todo value=submit>
<table border="0" cellspacing="0" >
<tr><td  align=left  >   
<select name=month value=''>Month</option>
<option value='01'>January</option>
<option value='02'>February</option>
<option value='03'>March</option>
<option value='04'>April</option>
<option value='05'>May</option>
<option value='06'>June</option>
<option value='07'>July</option>
<option value='08'>August</option>
<option value='09'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>

</td><td  align=left  >   
Start Date<select name=dt >
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>


</td><td  align=left  >   
Year(yyyy)<input type=text name=year size=4 value=2005>

</table>
    <?Php
$todo=$_POST['todo'];
if(isset($todo) and $todo=="submit"){
$month=$_POST['month'];
$dt=$_POST['dt'];
$year=$_POST['year'];
$date_value="$month/$dt/$year";
echo "mm/dd/yyyy format :$date_value<br>";
$date_value="$year-$month-$dt";
echo "YYYY-mm-dd format :$date_value<br>";
}
//month 
?>
<form method=post name=f1 action=''><input type=hidden name=todo value=submit>
<table border="0" cellspacing="0" >
<tr><td  align=left  >   
<select name=month value=''>Month</option>
<option value='01'>January</option>
<option value='02'>February</option>
<option value='03'>March</option>
<option value='04'>April</option>
<option value='05'>May</option>
<option value='06'>June</option>
<option value='07'>July</option>
<option value='08'>August</option>
<option value='09'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>

</td><td  align=left  >   
End Date<select name=dt >
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>


</td><td  align=left  >   
Year(yyyy)<input type=text name=year size=4 value=2005>
</table>

</form>
<input type="checkbox" name="option1" value="Show Group Project"> Show Group Project
<input type="checkbox" name="option2" value="Suitable for all ages"> Suitable for all ages

<input type=submit value=Submit>
         <footer>
<!--Calls Footer from file footer.index.php -->
        <div> 
            <?php include $_SERVER['DOCUMENT_ROOT'].'/nav/footer.php'; ?> 
        </div>
    </footer>
    </body>
</html>
