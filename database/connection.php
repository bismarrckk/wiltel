<?php
$DBhost = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "wiltel";

$conn = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($conn->connect_errno) {
echo "connection failed";
}
	

/*

$DBhost = "localhost";
$DBuser = "wiltelco_wilteluser";
$DBpass = "@_Website1";
$DBname = "wiltelco_website";

$conn = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($conn->connect_errno) {
echo "connection failed";
}
	
?>*/