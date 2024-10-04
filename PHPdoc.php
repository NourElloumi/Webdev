<?php
function connectDB($db)
{
$conn = mysqli_connect("localhost","root","", $db);
if (!$conn)
{
 
die("Connection failed: " .mysqli_connect_error());
}
Return true; 
}
2) Function call
$v = connectDB("test"); 
if($v == true) 
{ 
echo "Connection to the db test is successful"; 
}
else echo "Could not connect to the server of the database";
?>