<?php
//display_events.php
include('db_connect.php');
include('header.php');
echo('<h2>Display Events</h2>');
 $sql = "SELECT * FROM events";
 
 $result = mysql_query($sql);
 if (mysql_num_rows($result) > 0){
 
 echo "<table>";
 
 //output data for each row
 while($row = mysql_fetch_assoc($result)) {
 echo '<tr>';
  echo "<td>ID: " . $row["id"]. "</td>
  <td>Title: " . $row["title"]. "</td>
  <td>Description: " . $row["description"]. "</td>
  <td>Date: " . $row["date"]. "</td>
  <td>Location: " .$row["location"]. "'</td>";
  echo '<tr>';
  }
  echo '</table>';
   }
   else {
         echo '<h2>No results to display</h2>';
         
    }
    echo '<a href="page1.php">Back</a>';
 

?>