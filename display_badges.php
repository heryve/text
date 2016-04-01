<?php
include('db_connect.php');
include('header.php');
echo ('<h2>Display Badges</h2>');
$sql = "SELECT *FROM badges";

$result = mysql_query($sql);
if (mysql_num_rows($result) > 0) {

echo "<table>";

//output data of each row
while($row = mysql_fetch_assoc($result)) {
echo '<tr>';
echo "<td>ID: " . $row["id"]. " </td>
<td>Name: " . $row["name"]. " </td>
<td>Info: " . $row["info"]. " </td>
<td><img src='" .$row["path"]."'></td>";
echo '</tr>';
}
echo '</table>';
  }
  else {
        echo '<h2>No results to display</h2>';
}
echo '<a href="page1.php">Back</a>';
?>
