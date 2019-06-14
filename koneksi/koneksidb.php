<?php
define('DB_USER', "cellinlogin"); // db user
define('DB_PASSWORD', "CellIn123"); // db password (mention your db password here)
define('DB_DATABASE', "cellin"); // database name
define('DB_SERVER', "cellin.database.windows.net"); // db server
 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
?>
