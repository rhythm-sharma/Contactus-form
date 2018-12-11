<?php

$db_host="your_hostname";//edit here
$db_username="database_username";//edit here
$db_password="your_password";//edit here
$db_name="database_name";//edit here


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
