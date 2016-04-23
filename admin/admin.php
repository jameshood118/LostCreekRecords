
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="description" CONTENT="Music, Folk, Tim Watson">
<META NAME="author" CONTENT="James Hood">
<META NAME="ROBOTS" CONTENT="ALL">
<title>The Admin of Timothy Watson</title>
<link rel="stylesheet" type="text/css" href="../design.php" />
</head>

<body>
<div id="wrap">

<div id="header">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1173" height="260"> 
 
        <param name="movie" value="../menu.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="bgcolor" value="#ffffff" /> 
		<embed src="../menu.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="1173" height="260" name="menu"></embed> 
 
       </object> 
<br />
</div>
<div id="left"><img src="../images/tim1.png" class="img"/></div>
<div id="main" class="clearfix">

        
        <div class="myBox">
									<?php 
									$error=$_GET['error'];
									if ($error=="true") {
									print ('<font color=red>Login Incorrect Retry.</font><br>');
									}
									?>

 <form name="form1" method="post" action="admin_menu.php">
 				Admin Login:<input name="login" type="text" id="login"><BR>
                Admin Password:<input name="password" type="password" id="password">              
              <input type="submit" name="Submit" value="Submit">
              </form>
</div>

</div>

<div id="farright"><img src="../images/right items.png" class="img2"/></div>   

      <div id="footer"> 
      <?php include("footer_admin.php"); ?>
  
</div> </div>
</body>
</html>