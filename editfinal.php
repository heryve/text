<?php
//editfinal.php
require('db_connect.php');
require('header.php');
echo '<h1>Edit an event</h1>';

if(isset($_POST['Submit'])){
    $field= mysql_escape_string($_POST['field']);
    $input_value=mysql_escape_string($_POST['input_value']);
    
    $new_title= mysql_escape_string($_POST['new_title']);
    $new_description= mysql_escape_string($_POST['new_description']);
    $new_date= mysql_escape_string($_POST['new_date']);
    $new_location= mysql_escape_string($_POST['new_location']);
    echo $field;
    echo $input_value;
    $sql = "UPDATE events SET title='$new_title',description='$new_description',date='$new_date',
    location='$new_location' WHERE $field='$input_value'";
    $result=mysql_query($sql);
    echo'<a href="page1.php">Home</a>';
}
require('footer.php');
?>