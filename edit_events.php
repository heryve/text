<?php
//edit_events.php
require('db_connect.php');
require('header.php');
echo '<h1>Edit an event</h1>';
require('eventsSearch.php');
if(mysql_num_rows($result) == 1){
echo 'what adjustments do you want to make?';
echo'<form action="editfinal.php" method="POST">
<input type="hidden" name="input_value" value="' .$input_value.'">
<input type="hidden" name="field" value="'.$field.'">
New Title: <input name="new_title" type="text">
New Description: <input name="new_description" type="text">
New Date: <input name="new_date" type="text">
New Location: <input name="new_location" type="text">
<input type="Submit" name="Submit">
</form>';
}
else{
     echo'<p>Multiple or No results. please try again</p>';
     echo'<a href="page1.php">Back to the main page</a>';
}
require('footer.php');
?>