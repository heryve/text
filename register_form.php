<?php
//register_form.php
require('db_connect.php');
require('header.php');

echo '<h1> register </h1>';
echo '
<div id="formsection">
<form class="formstyle" name="regform" action="register.php" method="POST">
<p><label for="Username">username:</label><br/>

<input type="text" name="username" size="30"/></p>
<p><label for="Firstname">firstname:</label></br/>

<input type="text" name="firstname" size="30"/></p>
<p><label for="Lastname">lastname:</label><br/>

<input type="text" name="lastname" size="30"></p>
<p><label for="Password">password:</label><br/>

<input type="text" name="password" size="30"></p>
<p><label for="Trained">trained:</label><br/>

<input type="text" name="trained" size="30"/></p>
<p><label for="Disclosure">disclosure:</label><br/>

<input type="text" name="disclosure" size="30"></p>
<p><label for="Days Available">daysAvailable:</label><br/>

<input type="text" name="daysAvailable" size="30"/></p>
<p><label for="Times Available">timesAvailable:</label><br/>

<input type="text" name="timesAvailable" size="30"/></p>

<input type="submit" value="Submit">

</form>
</div>
';
require('footer.php');

?>