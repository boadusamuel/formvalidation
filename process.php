<?php

if(isset($_POST['submit'])){

  

$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$address = trim($_POST['address']);
$gender = trim($_POST['gender']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);



if(empty($fullname) || empty($email) || empty($address) || empty($gender) || empty($username) || empty($password) ){

header("location:index.php?error=Please all fields are Required&fullname=$fullname&email=$email&address=$address&gender=$gender&username=$username");

}else{


   header("location:index.php?success=Registration Successful");
}

}