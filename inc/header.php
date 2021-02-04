<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'textNdriver';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

/**************/

function query($query)
{
	global $db;
	return mysqli_query($db, $query);
}

// EOF