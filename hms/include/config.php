<?php
define('DB_SERVER','localhost:3307');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'ecomcar');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>