<?php
// connect.php
include 'config.php';
// kan vervangen worder door.
//$server = 'localhost';
//$username   = 'usernamehere';
//$password   = 'passwordhere';
//$database   = 'databasenamehere';

if (!mysql_connect($db_hostname, $db_username, $db_password))
{
	exit('Error: kon niet met de database verbinden.');
}
if (!mysql_select_db($db_database))
{
	exit('Error: kan de database niet vinden');
}