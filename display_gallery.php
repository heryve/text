<?php
//display_gallery.php
include('db_connect.php');
include('header.php');
echo ('<h2>Display Gallery</h2>');
$sql = "SELECT *FROM gallery";

$result = mysql_query($sql);
if (mysql_num_rows($result) > 0) {

echo "<table>";

//output data of each row
while($row = mysql_fetch_assoc($result)) {
echo '<tr>';
echo "<td>ID: " . $row["id"]. " </td>
<td>Information:" .$row["information"]."</td>
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