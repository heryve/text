  <?php
  require('header.php');
  
  echo'     

  <div id="banners">
 
 <img src="images/banners/slider-image/banner3.jpg" alt="banner1">
				


   </div><!--end of banners-->


<div id="content-wrapper">
<div id="content">
<h1>Quiz</h1>

<h2> Who is the founder of the cub Scouts?</h2>
<form>
 <input type="radio" name="same" value="a"/>Georges Wanchington
<input type="radio" name="same" value="b"/>Baden Powell
<input type="radio" name="same" value="c"/>Wilson Churchill
</form>

<h2> Whats year did the cub scouts was founded?</h2>
<form>
 <input type="radio" name="same" value="a"/>1900
<input type="radio" name="same" value="b"/>1907
<input type="radio" name="same" value="c"/>1964
</form>

<h2>  which country did he born?</h2>

<form>
 <input type="radio" name="same" value="a"/>USA
<input type="radio" name="same" value="b"/>Canada
<input type="radio" name="same" value="c"/>England
</form>
<h2> Before he created the cub scouts what did he do?</h2>
<form>
 <input type="radio" name="same" value="a"/>Military
<input type="radio" name="same" value="b"/>Banker
<input type="radio" name="same" value="c"/>Teacher
</form>
<h2>which century did he born?</h2>
<form>
 <input type="radio" name="same" value="a"/>18 century
<input type="radio" name="same" value="b"/>19 century
<input type="radio" name="same" value="c"/>20 century
</form>

<form>
<input type="submit" name="submit" value="submit">
</form>


<i>123 flat</i><br> 
<i>North Badesley Rood</i><br>
<i>G59Al</i><br>
<i>Glasgow</i>
</div><!--end of content div-->
</div><!--end of content-wrapper-->

<div id="rightside">

 <h2>Search Engine</h2>

<form name="search_form" action="search.php" method="post">
<input class="text" type="text" size="20" />
<input class="submit" type="submit" value="search">
</form><!--end of form-->

<h2>Eagle Scouts</h2>
<h6>51 years ago, 30 Lubbock Eagle Scouts made history</h6>
<p>If you think 30 boys getting the Eagle Scout Award at once is impressive today, just imagine that feat happening 51 years ago.
In 1960, the accomplishment was so amazing, in fact, that the President of the United States took notice. Click here to check out the telegram he sent.
On July 1, 1960, 30 boys from Lubbock, Tex., gathered for what was, at the time, the largest Eagle Scout Court of Honor in history.
</p>
<img src="images/eaglebaden.jpg" alt="gallery1">
<p>Though the current �record� for largest Eagle Court of Honor now rests with these 260 Eagle Scouts, that doesn�t diminish what these Lubbock Scouts achieved.</p>
<ul>
<li><a href="http://obanshirescouts.eu.pn">Cub Scouts</a>
</li>
<li><a href="https://en.wikipedia.org/wiki/Robert_Baden-Powell,_1st_Baron_Baden-Powell">Baden Powell</a></li>

<li><a href="https://en.wikipedia.org/wiki/Eagle_Scout_(Boy_Scouts_of_America)">Eagle Scouts</a></li>
<li><a href="http://www.scouts-scotland.org.uk/sections/cub-scouts.aspx">Scouts Scotland</a></li>

</ul>




<div id="subnav">
<ul>
                         <li><a href="signin.html">Sign in</a></li>
                         <li><a href="signup.html">register</a></li>
</ul>                     


</div><!-- end of subnav-->
</div><!-- end of rightside div-->
';
require('footer.php');

?>