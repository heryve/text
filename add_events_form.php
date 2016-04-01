<?php
//add_events_form.php
echo '<h3> Add Events</h3>';
echo '<form name="addevents" action="uploadEvent.php" method="post" enctype="multipart/form-data">';
echo '<table class="tableform">

<tr>
     <td>Title></td>
     <td><input type="text" name="title_box"></input></td>
</tr>

<tr>
     <td>Description></td>
     <td><input type="text" name="description_box"></input></td>
</tr>

<tr>
     <td>Date></td>
     <td><input type="text" name="date_box"></input></td>
</tr>

<tr>
     <td>Location></td>
     <td><input type="text" name="location_box"></input></td>
</tr>



<tr><td>&nbsp;</td><td><input type="Submit" value="Submit">
</table>
</form>';

?>