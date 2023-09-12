<?php
session_start();
include "../database/env.php";



$email = $_REQUEST ['email'];
$password = $_REQUEST ['password'];
$error = [];
//validation rules


if(empty($email)){
    $error['email_error'] = "Submit your Email";
}

if(empty($password)){
    $error['password_error'] = "Submit your Password";
}
else if(strlen($password) > 10){
    $error ['password_error'] =  "Password must be 10 characters or less";
}


if(count($error) > 0 ){


     $_SESSION['userData'] = $_REQUEST;

    $_SESSION['form_error'] = $error;

    header("Location: ../post_system.php");
}

else{

   $query=  "INSERT INTO users(email, password) VALUES ('$email', '$password')";

   $result= mysqli_query($conn, $query);


   if ($result) {
        $_SESSION['msg'] =" Heads up, You Successfully logged in!";
       header("Location: ../post_system.php");
   }
}