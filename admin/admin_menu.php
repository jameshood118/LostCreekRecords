
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

<br />
</div>
<div id="left"><img src="../images/tim1.png" class="img"/></div>
<div id="main" class="clearfix">

        
        <div class="myBox">
						
   		   <?php include ("creds.php"); ?>
<center>
                            <form name="form1" method="post" action="admin_blog.php">
                            <input type="hidden" value="<?php echo $login?>" name="login">
                            <input type="hidden" value="<?php echo $loginpass?>" name="password">
                            <input type="submit" name="Submit" value="Admin Blog">
                            </form>
                                                
                            <form name="form1" method="post" action="admin_links.php">
                            <input type="hidden" value="<?php echo $login?>" name="login">
                            <input type="hidden" value="<?php echo $loginpass?>" name="password">
                            <input type="submit" name="Submit" value="Admin Links">
                          </form>
                   <form name="form4" method="post" action="../index.php">
                    <input type="submit" name="Submit4" value="Logout">
                  </form></center>
</div>

</div>

<div id="farright"></div>   

      <div id="footer"> 
      <?php include("footer_admin.php"); ?>
  
</div> </div>
</body>
</html>