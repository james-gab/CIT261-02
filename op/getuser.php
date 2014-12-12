<?php

$q = intval($_GET['q']);



$servername = "localhost";
$username = "jfcguita_iUser";
$password = "thinkbigBOY@12345";
$dbname = "jfcguita_iServe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$medi = "    @media only screen and (min-width: 581px) and (max-width: 801px)";

$sql = "SELECT * FROM project";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row["ptype"] == $q){
//        echo "in the while ";
        echo "<table><hr/><br/><tr><td class='tablerow'>".$row["pname"]."</td></tr><tr><td class='tablerow'>".$row["teaserdesc"]."</td><td class='tablerow'>".$row["contactname"]."</td><td class='tablerow'>".$row["contactnum"]."</td></tr></table>";
        if ($medi > "@media only screen"){
            echo "<td class='tablerow1'>".$row["fulldesc"]."</td>";
        }
        
        }
    }
} else {
    echo "0 results";
}
echo"<hr/>";

mysqli_close($conn);


?>
