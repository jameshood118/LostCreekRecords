
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
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

   		   <?php include ("creds.php"); 
		   $first_view="1";
		   ?>

  
				  <form name="form1" method="post" action="">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Add_Blog" value="Add Blog">
                  </form>
         		
                     <form name="form4" method="post" action="../index.php">
                    <input type="submit" name="Submit4" value="Logout">
                  </form>
                  
                      <form name="form4" method="post" action="admin_menu.php">
                        <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit4" value="Back To Menu">
                  </form>

	<?php 
				if (isset($_POST['Add_Blog'])) { 
				unset ($first_view);
				?>
		 <center><FORM ENCTYPE="multipart/form-data" ACTION="" METHOD=POST>
    
  <table width="300" border="0" cellspacing="0" cellpadding="5">
  


<tr> 
      <td> <div align="right">Title:</div></td>
      <td><input name="title" type="text"></td>
</tr>
<tr> 
      <td> <div align="right">Message:</div></td>
      <td><textarea name="message" cols="25" rows="15"></textarea></td>
      </tr>

    <tr> 
      <td colspan="2"> <div align="center"> 
          <input type="submit" name="Submit_Blog" value="Submit New Blog">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table width="300" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Abort_Blog" value="Abort Addition">
        </form>
      </div></td>
  </tr>
</table></center>
		
	<?php } ?>
    
	<?php 
				if (isset($_POST['Edit_Blog'])) { 
				unset ($first_view);
			

$blog2edit=$_POST['blog2edit'];
$table = "blog" ;

$show_all = "SELECT * FROM $table WHERE Idnum='$blog2edit'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$date = $row[ "Date" ]."";
$title = $row[ "Title" ]."";
$message = $row[ "Message" ]."";

print ('Editing Entry - '.$Idnum.' - '.$date.' - '.$title.'');

}


				
				?>
	<FORM ENCTYPE="multipart/form-data" ACTION="" METHOD=POST>
    
<table width="300" border="0" cellspacing="0" cellpadding="5">
  


<tr> 
      <td> <div align="right">Title:</div></td>
      <td><input name="title" type="text" value="<?php echo $title?>"></td>
</tr>
<tr> 
      <td> <div align="right">Date:</div></td>
      <td><input name="date" type="text" value="<?php echo $date?>"></td>
</tr>
<tr> 
      <td> <div align="right">Message:</div></td>
      <td><textarea name="message" cols="25" rows="15"><?php echo $message?></textarea></td>
</tr>

    <tr> 
      <td></td>
      <td> 
          <input type="submit" name="Remove" value="Remove">
          <?php 
		  print ('<input type="hidden" value="'.$Idnum.'" name="idnum">');
		   print ('<input type="hidden" value="'.$login.'" name="login">');
		print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </td>
      <td> 
          <input type="submit" name="Submit_Edit" value="Submit Edits">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
			print ('<input type="hidden" value="'.$loginpass.'" name="password">');
			print ('<input type="hidden" value="'.$blog2edit.'" name="blog2edit">');
		  ?>
        </td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Abort_Edit" value="Abort Edit">
        </form>
      </div></td>
  </tr>
</table></center>
		
	<?php } ?>

    
    
    <?php 
					if (isset($_POST['Submit_Blog'])) { 
    // Database Insertion
$title=$_POST['title'];
$message=$_POST['message'];
$date = date("m.d.Y");



$table = "blog" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

$editedmessage = str_replace("'","&#039;",$message);

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_number=$Idnum+1;



///update database

mysql_query("INSERT into $table (Idnum, Date, Title, Message) Values ('$new_Idnum_number', '$date', '$title', '$editedmessage')") or die(mysql_error());
					}
?>

<?php 
					if (isset($_POST['Submit_Edit'])) { 
    // Database Insertion
$title=$_POST['title'];
$message=$_POST['message'];
$date = $_POST['date'];
$blog2edit = $_POST['blog2edit'];

$table = "blog" ;

$editedmessage = str_replace("'","&#039;",$message);


///update database

mysql_query("UPDATE $table SET Idnum='$blog2edit',
Date='$date', 
Title='$title', 
Message='$editedmessage'
WHERE Idnum = '$blog2edit'") or die(mysql_error());					

}
?>

    <?php 
					if (isset($_POST['Remove'])) { 
$Idnum=$_POST['idnum'];				
    // Database Insertion
$table = "blog" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

///update database

mysql_query("DELETE FROM $table WHERE Idnum='$Idnum'") or die(mysql_error());
					}
?>


<?php 				if (isset($first_view)) { 

$table = "blog" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<FORM ENCTYPE="multipart/form-data" ACTION="" METHOD=POST>');
print ('<select name="blog2edit">');

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$date = $row[ "Date" ]."";
$title = $row[ "Title" ]."";
$message = $row[ "Message" ]."";

print ('<option value="'.$Idnum.'">'.$Idnum.' - '.$date.' - '.$title.'</option>');

}
print ('</select>');
print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="submit" name="Edit_Blog" value="Edit Selected">');
}
?>

	        <?php 
if (isset($_POST['Abort_Blog'])) {
unset ($_POST['Add_Blog']);
}
?>	

	        <?php 
if (isset($_POST['Abort_Edit'])) {
unset ($_POST['Edit_Blog']);
}
?>	

</div>

</div>

<div id="farright"><img src="../images/right items.png" class="img2"/></div>   

      <div id="footer"> 
      <?php include("footer_admin.php"); ?>
  
</div> </div>
</body>
</html>