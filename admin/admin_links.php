
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
		  <?php $first_view="1";
		   ?>

          <BR>
          <BR>
        <form name="form3" method="post" action="">
          <input type="submit" name="Add_Links" value="Add New Link">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
        </form>
        <form name="form4" method="post" action="admin_menu.php">
          <input type="submit" name="Submit3" value="Back to Admin Menu">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
        </form>
        
        
        
        	<?php 
				if (isset($_POST['Add_Links'])) { 
				unset ($first_view);
				?>
		 <center><FORM ENCTYPE="multipart/form-data" ACTION="" METHOD=POST>
    
  <table width="600" border="0" cellspacing="0" cellpadding="5">
  

<tr> 
      <td width="230"> <div align="right">Address:</div></td>
      <td width="230"><input name="address" type="text"></td>
</tr>

<tr> 
      <td width="230"> <div align="right">Info:</div></td>
      <td width="230"><input name="info" type="text"></td>
</tr>

<tr> 
      <td width="230"> <div align="right">Link Text:</div></td>
      <td width="230"><input name="link_text" type="text"></td>
</tr>



    <tr> 
      <td colspan="2"> <div align="center"> 
          <input type="submit" name="Submit_Link" value="Submit New Link">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table width="600" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Abort_Link" value="Abort Addition">
        </form>
      </div></td>
  </tr>
</table></center>
		
	<?php } ?>
    
    
      <?php 
					if (isset($_POST['Submit_Link'])) { 
    // Database Insertion
$address=$_POST['address'];
$info=$_POST['info'];
$link_text=$_POST['link_text'];



$table = "Links" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());



while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_number=$Idnum+1;



///update database

mysql_query("INSERT into $table (Idnum, Address, Info, Link_text) Values ('$new_Idnum_number', '$address', '$info', '$link_text')") or die(mysql_error());
					}
?>



    
    
        <?php 
					if (isset($_POST['Remove'])) { 
$Idnum=$_POST['Idnum'];				
    // Database Insertion
$table = "Links" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

///update database

mysql_query("DELETE FROM $table WHERE Idnum='$Idnum'") or die(mysql_error());
					}
?>


	<?php 
				if (isset($_POST['Edit_Links'])) { 
				unset ($first_view);
			

$link2edit=$_POST['Idnum'];
$table = "Links" ;

$show_all = "SELECT * FROM $table WHERE Idnum='$link2edit'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$info = $row[ "Info" ]."";
$address = $row[ "Address" ]."";
$link_text = $row[ "Link_text" ]."";


print ('Editing Entry - '.$Idnum.' - '.$info.'');

}


				
				?>
	<FORM ENCTYPE="multipart/form-data" ACTION="" METHOD=POST>
    
<table width="600" border="0" cellspacing="0" cellpadding="5">
  


<tr> 
      <td width="230"> <div align="right">Address:</div></td>
      <td width="230"><input name="address" type="text" value="<?php echo $address?>"></td>
</tr>

<tr> 
      <td width="230"> <div align="right">Info:</div></td>
      <td width="230"><input name="info" type="text" value="<?php echo $info?>"></td>
</tr>

<tr> 
      <td width="230"> <div align="right">Link Text:</div></td>
      <td width="230"><input name="link_text" type="text" value="<?php echo $link_text?>"></td>
</tr>

    <tr> 
      <td></td>
      <td> 
          <input type="submit" name="Remove" value="Remove">
          <?php 
		  print ('<input type="hidden" value="'.$Idnum.'" name="Idnum">');
		   print ('<input type="hidden" value="'.$login.'" name="login">');
		print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </td>
      <td> 
          <input type="submit" name="Submit_Edits" value="Submit Edits">
          <?php 
		   print ('<input type="hidden" value="'.$Idnum.'" name="Idnum">');
		  print ('<input type="hidden" value="'.$login.'" name="login">');
			print ('<input type="hidden" value="'.$loginpass.'" name="password">');
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
					if (isset($_POST['Submit_Edits'])) { 
    // Database Insertion
$Idnum=$_POST['Idnum'];
$address=$_POST['address'];
$info=$_POST['info'];
$link_text=$_POST['link_text'];

$table = "Links" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());


///update database

mysql_query("UPDATE $table set Idnum='$Idnum',
Address='$address',
Info='$info',
Link_text='$link_text'
WHERE Idnum = '$Idnum'") or die(mysql_error());
					}
?>
    

		<?php 				if (isset($first_view)) { 		  
$table = "Links" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<table border=1>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$info = $row[ "Info" ]."";
$address = $row[ "Address" ]."";
$link_text = $row[ "Link_text" ]."";



print ('<td>'.$Idnum.' - '.$address.' - '.$info.' - '.$link_text.'<BR>');
print ('<td><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Edit_Links" value="Edit" />');
print ('</form></td>');
print ('<td><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Remove" value="Delete" />');
print ('</form>');
print ('</td>');

$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
		}
		?>
        
        	        <?php 
if (isset($_POST['Abort_Links'])) {
unset ($_POST['Add_Site']);
}
?>	

	        <?php 
if (isset($_POST['Abort_Edit'])) {
unset ($_POST['Edit_Site']);
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