<?php

$DBhost = "localhost";
$DBuser = "wiltelco_teasys";
$DBpass = "teasys2019";
$DBname = "wiltelco_teasys";

$DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($DBcon->connect_errno) {
echo "connection failed";
}
	
?>