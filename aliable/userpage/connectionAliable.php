<?php

$serveraddress='localhost';
$username= 'root';
$password='';
$DBname='aliable';

$con =new mysqli($serveraddress,$username,$password,$DBname);

if($con->connect_error)
{
    die('Connecton Error');
}

?>

