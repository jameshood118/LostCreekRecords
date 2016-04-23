<?php

					$name=$_POST['name'];
					$email=$_POST['email'];
					$subject=$_POST['subject'];
					$message=$_POST['message'];

$mailform = "
From: $email \n
Name: $name \n
Subject: $subject \n
Message: $message \n
";
					

	$headers .= 'From: Tim Watson Contact Form "'. $name . '" <' . $email . '>' . "\r\n" .
	'Reply-To:"'.$email.'"';

  

  mail( "lstcrkrcrds@gmail.com", "Tim Watsons Contact Form", $mailform, $headers );
	echo '<script language="JavaScript">window.location="http://lostcreekrecords.com/index.php?action=contact&thanks=true";</script>';
?>




