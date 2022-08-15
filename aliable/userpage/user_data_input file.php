<?php

include('connectionAliable.php');

json_encode(

    $u_name=$_POST['name'],
$u_email=$_POST['email'],
$u_username=$_POST['username'],
$u_password=$_POST['password'],
$u_gender=$_POST['gender'],
$u_designation=$_POST['designation'],

);



$myinsert = "INSERT INTO users (name,email,username,password,gender,designation) VALUES ('$u_name','$u_email','$u_username','$u_password','$u_gender','$u_designation')";

if($con->query($myinsert))
{
    echo 'User Registerd Successfuly!';
}
else{
    echo 'Something Went wrong';
}




?>


