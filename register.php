<?php
//register.php
require('db_connect.php');
require('header.php');

if (isset($_POST['submit'])){

$username=mysql_escape_string($_POST['username']);
$firstname=mysql_escape_string($_POST['firstname']);
$lastname=mysql_escape_string($_POST['lastname']);
$password=mysql_escape_string($_POST['password']);
$trained=mysql_escape_string($_POST['trained']);
$disclosure=mysql_escape_string($_POST['disclosure']);
$daysAvailable=mysql_escape_string($_POST['daysAvailable']);
$timesAvailable=mysql_escape_string($_POST['timesAvailable']);

//$username is the username passed from the form
echo '<script>alert(" hjkhkljhikhjl".$username." ")</script>';
$vcheck =mysql_query("SELECT * FROM users WHERE username='$username'") or die(mysql_error);

//check the number of row that the query generates
$numberrows = mysql_num_rows($vcheck);
}
if($numberrows>0){
    echo'<script> alert( "users already exists");</script>';
    exit();
}else{
    $sql="INSERT INTO users(username,firstname, lastname,password, trained, disclosure,daysAvailable,
    timesAvailable) VALUES('$username','$firstname','$lastname','$password','$trained','$disclosure','$daysAvailable',
    '$timesAvailable')";
    mysql_query($sql);
    echo'<script>alert("User successfully added")</script>';
    
}



require('footer.php');
?>