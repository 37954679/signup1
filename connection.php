<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="signup1";
if(!$con=mysql_connect($dbhost,$dbuser,$dbpass,$dbname));
{
die("failed to connect!");
}

?>