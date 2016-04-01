<?php
//uploadEvents.php
include ('db_connect.php');
//must be changed to your directory
$target_dir ="events/";
//target file variable will be input into the database as the events
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);

$title= mysql_escape_string($_POST['title_box']);
$description= mysql_escape_string($_POST['description_box']);
$date= mysql_escape_string($_POST['date_box']);
$location= mysql_escape_string($_POST['location_box']);
$events= $target_file;
$sql = "INSERT INTO events ( title, description, date, location)
VALUES( '$title', '$description', '$date', '$location')";

if (mysql_query($sql)) {
    echo "New record created successfully";
}else{
    echo "error: " .$sql . "<br>" . mysql_error($conn);
}
//COPY THIS CODE
/*ALL OF THE FOLLOWING CODE INVOLVES CHECKING AND UPLOADING THE FILE*/
$uploadEventOk =1;
$eventsFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//Check if the events is actual events or fake events
if(isset($_POST["submit"])){
    $check =geteventssize($_FILES["fileToUpload"]["tmp_name"]);
if($check !==false){
    echo "File is an events-".$check["mime"].".";
$uploadEventsOk =1;
}else{
echo "File is not and events.";
$uploadEventOK =0;
}
}
//check if the file already exists
if (file_exists($target_file)){
    echo "Sorry, file already exists";
    $uploadEventOk =0;
}
//check file size
if ($_FILES["file ToUpload"]["size"] >500000) {
    echo "sorry, your file is too large.";
}
//Check if the $upload)k is set to 0 by an error
if ($uploadEventOk ==0 ){
    echo "Sorry, your file was not uploaded.";
    // if everthing is ok, try to upload file
}else{
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
echo "The file" .basename($_FILES["fileToUpload"]["name"]). "has been uploaded";
}else{
    echo "Sorry, ther was an error uploading your file;";
}
}
echo '<a href="index.php">Back to the main page</a>';
//END OF COPIED CODE
require('footer.php');






?>