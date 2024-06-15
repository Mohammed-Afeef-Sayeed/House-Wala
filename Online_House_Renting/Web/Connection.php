<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = " user_details";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
