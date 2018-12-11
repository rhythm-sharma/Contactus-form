<?php

$db_host="sql203.epizy.com";
$db_username="epiz_22906820";
$db_password="5VODI9J2F";
$db_name="epiz_22906820_php_tutorial";


$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die() ;
// Check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); // this will give us complete detail of error
}
else
{
    // echo "<h1>Connected! to database</h1>";
}

?>