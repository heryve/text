<?php
//search_badges.php
require('db_connect.php');
require('header.php');
echo '<h1>Search for badges</h1>';
require('badgesSearch.php');

echo '<a href="page1.php">Back to main page</a>';
require('footer.php');

?>