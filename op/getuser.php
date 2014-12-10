<?php
$q = intval($_GET['q']);

//$con = mysqli_connect('localhost','peter','abc123','my_db');
//if (!$con) {
//  die('Could not connect: ' . mysqli_error($con));
//}

include('..\signin\connection.php');

mysqli_select_db($con,"project");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM mem_id WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Project Name</th>
<th>Description</th>
<th>Contact Name</th>
<th>Contact Number</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['pname'] . "</td>";
  echo "<td>" . $row['teaserdesc'] . "</td>";
  echo "<td>" . $row['contactname'] . "</td>";
  echo "<td>" . $row['contactnum'] . "</td>";
  echo "</tr>";
  echo "<hr>";
  }
echo "</table>";

mysqli_close($con);
?>