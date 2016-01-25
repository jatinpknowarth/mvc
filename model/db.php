<?php

$db = new mysqli('localhost','root','','mvc');
if($db->connect_error)
{
	echo 'connection error...';
}


?>