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








//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    echo "<table><tr><th>ID</th><th>Name</th></tr>";
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "in the while";
//        echo "<tr><td>".$row["pname"]."</td><td>".$row["teaserdesc"]."</td><td>".$row["contactname"]."</td><td>".$row["contactnum"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 results";
//}
//$conn->close();



























//
//
//
////$con = mysqli_connect('localhost','peter','abc123','my_db');
////if (!$con) {
////  die('Could not connect: ' . mysqli_error($con));
////}
//
//require_once ['..\signin\connection.php'];
//
//
//
//
////Create query
////    mysqli_select_db("iServe");
//    $qry="SELECT * FROM project WHERE ptype='".$q."'";
//    $member = mysql_query($qry);
//    
//    
//
////
////mysqli_select_db($con,"project");
//////$sql="SELECT * FROM user WHERE id = '".$q."'";
////$sql="SELECT * FROM project WHERE id = '".$q."'";
////$result = mysqli_query($con,$sql);
//
//echo "<table border='1'>
//<tr>
//<th>Project Name</th>
//<th>Description</th>
//<th>Contact Name</th>
//<th>Contact Number</th>
//</tr>";
//
//while($row = mysqli_fetch_array($member)) {
//  echo "<tr>";
//  echo "<td>" . $row['pname'] . "</td>";
//  echo "<td>" . $row['teaserdesc'] . "</td>";
//  echo "<td>" . $row['contactname'] . "</td>";
//  echo "<td>" . $row['contactnum'] . "</td>";
//  echo "</tr>";
//  echo "<hr>";
//  }
//echo "</table>";
//
//mysqli_close($con);
?>
