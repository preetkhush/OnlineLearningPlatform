<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "onlinelearningsystem";

$db = new mysqli($host, $username, $password, $dbname);

if($db->connect_errno){
    die("Connection error:" . $db->connect_errno);
}

return $db;

?>
