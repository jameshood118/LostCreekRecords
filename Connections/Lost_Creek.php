<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Lost_Creek = "www.lostcreekrecords.com";
$database_Lost_Creek = "bloodgai_lostcreek";
$username_Lost_Creek = "bloodgai_jameslc";
$password_Lost_Creek = "Is!)EMXkgELe";
$Lost_Creek = mysql_pconnect($hostname_Lost_Creek, $username_Lost_Creek, $password_Lost_Creek) or trigger_error(mysql_error(),E_USER_ERROR); 
?>