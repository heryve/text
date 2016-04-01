<?php
//search_events.php
require('db_connect.php');
require('header.php');
echo '<h1>Search for Events</h1>';
require('eventsSearch.php');

echo '<a href="page1.php">Back to main page</a>';
require('footer.php');

?>