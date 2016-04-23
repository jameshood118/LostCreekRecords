<?php 
include("header.php"); ?>


	<?php 	$action=$_GET['action'];
			$next=$_GET['next'];
	if ($action=="" or $action=="home"){
		?>
<div id="left"><img src="images/tim1.png" class="img"/></div>
<div id="main" class="clearfix">
  
        <?php 

include("db.php"); 


$table = "blog" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum DESC LIMIT 15";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div class="myBox">');
while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$date = $row[ "Date" ]."";
$title = $row[ "Title" ]."";
$message = $row[ "Message" ]."";

$newmessage=nl2br($message);

print ('<b>'.$title.'</b> - '.$date.'<BR>');
print ('<BR>'.$newmessage.'<BR>');
print ('<BR><img src="images/divide.png" width="75" class="center" /><BR>');
}
print ('</div>');
?>
     

<?php } elseif ($action=="contact"){ 

?>
<div id="left"><img src="images/tim2.png" class="img"/></div>
<div id="main">
          
<div class="contactbox">	
 <center>
<pre>P.O. Box 8458
Silver Spring, Maryland 20907
www.lostcreekrecords.com
240-839-1183
</pre>

<table width=300>
<form action="sendmail.php" method="post" name="contact_form" onsubmit="return validate_form ( );">
<tr><td align="right">Name:</td><td><input name="name" type="text" /></td></tr>
<tr><td align="right">Email:</td><td><input name="email" type="text" /></td></tr>
<tr><td align="right">Subject:</td><td><input name="subject" type="text" /></td></tr>
<tr><td align="left">Message:</td><td><textarea name="message" cols="20" rows="10"></textarea></td></tr>
<tr><td align="right"></td><td><input name="submit" type="submit" value="Send Message" /></td></tr>
</form>
</table>
 </center>
</div>
<?php

} elseif ($action=="links"){?>
<div id="left"><img src="images/tim3.png" class="img" /></div>
<div id="main" class="clearfix">
              
       <?php 

include("db.php"); 

$table = "Links" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div class="linkBox">');
while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$address = $row[ "Address" ]."";
$info = $row[ "Info" ]."";
$link_text = $row[ "Link_text" ]."";


print ('<b>'.$info.'.....   &nbsp;<a href="'.$address.'" class="menuLink" title="'.$info.'">'.$link_text.'</a><BR>');
}
print ('</div>'); 
?>
<BR /><BR /><BR />
<?php	} ?>



<div id="farright">
<?php if ($action=="" or $action=="home"){?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="fb-like-box" data-href="https://www.facebook.com/pages/Tim-Watson/205971202807600" data-width="300" data-colorscheme="dark" data-show-faces="false" data-border-color="733921" data-stream="false" data-header="false"></div>
<?php }?>
</div> 

        
      <div id="footer"> 

       <?php include("footer.php"); ?>
    
</div> 
</body>
</html>