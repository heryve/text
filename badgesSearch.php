<?php
//badgesSearch.php

if(isset($_POST['submit'])){
$input_value= mysql_escape_string($_POST['input_value']);
$field= mysql_escape_string($_POST['field']);
}

$sql ="SELECT * FROM badges WHERE $field ='$input_value'";
$result=mysql_query($sql);

if (mysql_num_rows($result) > 0 ) {

echo"<table border='1'>";

//output daya of each row
while($row = mysql_fetch_assoc($result)) {
    echo '<tr>';
    echo "<td>id: " . $row["id"]. " </td>
    <td>Name: " . $row["name"]. "</td>
    <td>Info: " . $row["info"]. "</td>
    <td><img src='".$row["path"]."'></td>";
    echo '</tr>';
}
echo '</table>';
}


?>