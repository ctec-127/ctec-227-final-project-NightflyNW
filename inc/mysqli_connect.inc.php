<?php 

$db = new mysqli('localhost','root','','quiz_show');

if ($db->connect_error) {
	$error = $db->connect_error;
}

$db->set_charset('utf8');