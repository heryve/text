<?php
//delete_events.php
require('db_connect.php');
require('header.php');
echo '<h1>Deleting an event</h1>';
require('eventsSearch.php');
if(mysql_num_rows($result) > 0){
    echo '<p>Do you want to delete these records?</p>';
    echo '<form action="deletefinal.php" method="POST">
    <input type="hidden" name="input_value" value="' .$input_value.'">
    <input type="hidden" name="field" value="' .$field.'">
    <input type="button" name"Cancel" value="Cancel" onClick=(location.href="page1.php")>
    </form>';
    }
    else{
        echo 'No results';
        echo '<a href="page1.php">Back to the main page</a>';
    }
    require('footer.php');
?>