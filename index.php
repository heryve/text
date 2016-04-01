<?php
require('db_connect.php');
require('header.php');

echo '<h1>welcome to Obanshire Cub Scouts</h1>';

echo'
<div id="formsection">
<form class="formstyle" action="mainscreen.php" method="POST">
Username:<input type="text" name="uname"/><br/>
Password:<input type="text" name="pass"/><br/>
Role:<select name="role">
<option value="leader">leader</option>
<option value="helper">helper</option>
</select>
    <input type="submit" name="submit" value="Log in"/>
</form>
<a href="register_form.php">Register Account</a>
<a href="logout.php">logout</a>
</div>

';

require('footer.php');

?>