<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mycon = "localhost";
$database_mycon = "book";
$username_mycon = "root";
$password_mycon = "1234567890";
$mycon = mysql_pconnect($hostname_mycon, $username_mycon, $password_mycon) or trigger_error(mysql_error(),E_USER_ERROR); 
?>