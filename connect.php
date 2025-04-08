<?php

$host="localhost";
$user="root";
$pass="";
$db="login";

//create connection
$conn=new mysqli($host,$user,$pass,$db);

//check connection
if($conn->connect_error){
    echo "Failed to connnect DB".$conn->connect_error;
}
?>

