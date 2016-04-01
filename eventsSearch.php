<?php
//eventsSearch.php

if(isset($_POST['submit'])){
$input_value= mysql_escape_string($_POST['input_value']);
$field= mysql_escape_string($_POST['field']);
}

$sql = "SELECT * FROM events WHERE $field ='$input_value'";
$result=mysql_query($sql);

if(mysql_num_rows($result) > 0) {

echo "<table border='1'>";

//output data of each row
while($row = mysql_fetch_assoc($result)) {
    echo '<tr>';
     echo "<td>id: " . $row["id"]. "</td>
     <td>Title: " . $row["title"]. "</td>
     <td>Description: " .$row["description"]. "</td>
     <td>Date: " . $row["date"]. "</td>
     <td>Location:' " . $row["location"]. "</td>";
     echo '</tr>';
}
echo '</table>';
}
?>