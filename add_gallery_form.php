<?php

//add_gallery_form.php
echo'<h3>Add Gallery</h3>';
echo '<form name="addgallery" action="upload.php" method="post" enctype="multipart/form-data">';
echo '<table class="tableform">




<tr>
   <td>Make</td>
   <td><input type="text" name="make_box" size="30"></input></td>
</tr>




<tr>
   <td>Image</td>
   <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
</tr>

<tr><td>&nbsp;</td><td><input type="Submit" value="Submit">
</table>
</form>';
    
?>