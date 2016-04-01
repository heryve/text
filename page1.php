<?php
include('db_connect.php');
session_start();

if (!isset($_SESSION['login']) && ($_SESSION['login'] !='')) {

header ("Location: index.php");





}
else{

include("header.php");
echo 'You are logged in as ' .$_SESSION["uname"].'';

echo '<div id="formsection">';
echo ' <h1>Welcome to Obanshire Cub Scouts</h1>';
echo '<h2>Display Badges</h2>';
include('display_badges_form.php');
include('search_badges_form.php');
echo '<h2>display gallery</h2>';
include('display_gallery_form.php');
include('add_gallery_form.php');
echo '<h2>display Events</h2>';
include('display_events_form.php');
include('search_events_form.php');
include('add_events_form.php');
include('edit_events_form.php');
include('delete_events_form.php');

echo '</div>';
}
include('footer.php');



?>