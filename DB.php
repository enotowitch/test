<?php
// DB.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thetestdb";

$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error){
die("Conenction failed");
}
echo "conn success";
?>