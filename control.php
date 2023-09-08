
<?php
session_start();

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

    // $_SESSION['old'] = $_REQUEST;
     $_SESSION['userData'] = $_REQUEST;
   
    $_SESSION['form_error'] = $error;

    header("Location: ../post_sys.php");
}

else{
	echo("<h2><center>Welcome to Web3</center></h2>");
	echo("<h3>DEFINITION
What is Web 3.0 (Web3)? Definition, guide and history
By David Essex, Industry EditorSean Michael KernerAlexander S. Gillis, Technical Writer and Editor</h3>");



print("What if the web could conjure up exactly the information you needed in exactly the format you wanted -- before you knew enough to ask for it? <br>

It would certainly be a much different, maybe even desirable -- if a little creepy -- internet experience. Yet it could someday be the reality of Web 3.0, the next version of the web.

Thanks to the changes that proponents of Web 3.0 claim it will bring, the internet will be much smarter, because artificial intelligence will be ubiquitous. All the world's data will be unified in a so-called Semantic Web. Everyday users will have more say than wealthy corporations about how their personal information is used. Banks will be irrelevant as people exchange digital currencies and records without intermediaries.");
}
