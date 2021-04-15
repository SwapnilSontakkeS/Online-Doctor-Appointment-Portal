<?php
// define('DB_SERVER','remotemysql.com');
// define('DB_USER','Wv6pkhxcwK');
// define('DB_PASS' ,'5KjJz5bGXl');
// define('DB_NAME', 'Wv6pkhxcwK');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$con = mysqli_connect("remotemysql.com",'Wv6pkhxcwK','5KjJz5bGXl','Wv6pkhxcwK');
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>