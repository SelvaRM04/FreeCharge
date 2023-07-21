<?php
$server="localhost";
$user="root";
$password="";

$conn=mysqli_connect($server,$user,$password);
if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}

$db="CREATE DATABASE IF NOT EXISTS Project";
mysqli_query($conn,$db);

$a = "USE Project";
mysqli_query($conn,$a);


$tb="CREATE TABLE IF NOT EXISTS userregister(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    mail VARCHAR(50) NOT NULL,
    pswd VARCHAR(50) NOT NULL,
    checkpswd VARCHAR(50) NOT NULL,
    usertype VARCHAR (5) DEFAULT 'user' NOT NULL
)";

mysqli_query($conn,$tb);

?>
