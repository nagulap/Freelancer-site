<?php
$hostname="localhost"; 
$username="root";  
$password="new_passowrd";       
$database="customer"; 
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>