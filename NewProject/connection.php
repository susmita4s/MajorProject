<?php
$hostname="localhost:3307";
$username="root";
$password="";
$dbname="newproject";
//create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Failed");
}
else{
    echo "";
}
?>