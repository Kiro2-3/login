<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cdmips";

if(!$con = mysqli_connect($servername, $username, $password, $dbname))
{
die("failed to connect!");
}

