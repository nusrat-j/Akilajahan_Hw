<?php

	$email= $_REQUEST['email'];
	$password = $_REQUEST['password'];

	$Mainemail = "akilajahan@gmail.com";
	$Mainpassword = "asdf1234";


	//using Nested if

if(strpos($email, "@")== true){
	if($password == $Mainpassword) {
		print_r("You are logged in");

		}else{
			echo "Invalid password";

      }

    }else{
  		echo "Invalid email";
  }

?>





