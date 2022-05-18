<?php
/*
$servername = '	sql211.epizy.com';
$usernames = 'epiz_31737233';
$password = 'kU2I2kBiaAFqvcr';
$database = 'epiz_31737233_UpFastApp';
*/


$servername = 'localhost';
$usernames = 'bishal';
$password = 'bishal';
$database = 'UpFastApp';


/*
$servername = 'db4free.net';
$usernames = 'bishalde';
$password = 'bishal@5741';
$database = 'clustix';
*/


$conn = mysqli_connect($servername, $usernames, $password, $database);
if (!$conn) {
  die("Error connecting to MYSQL" . mysqli_connect_error());
  exit(1);
}
?>