<?php

echo'<h3> Search Badges</h3>';
echo '<form name="badgesSearch" action="search_badges.php" method="post">
Field: <select name="field">
    <option value="id">id</option>
    <option value="name">name</option>
    <option value="info">info</option>
    <option value="path">path</option>
           
     </select>
     
value: <input type="text" name="input_value">
<input type="submit" name="submit">
<input type="button" value="Print This Page" onClick="window.print()"/>
</form>';
?>