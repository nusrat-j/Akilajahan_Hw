<?php

 echo "<h3>Youtube Thumbnail Generator</h3>";
  echo "<h4>~Homework 1~</h4>";


$apiLink = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";


$sourceLink = "https://youtu.be/dqlO6_5rZSQ?si=2krbw26HilmPKCaH";
$url1 = explode ("?si", $sourceLink)[0];
$url2 = explode ("/", $url1);
$videoId = end ($url2);
//print_r($videoId);

$thumbnail = str_replace("<insert-youtube-video-id-here>", $videoId, $apiLink);
echo '<img src=" ' . $thumbnail . ' "width="350px">';
echo "<br><br>";


//with function


function providethubnail($sourceLink){
	$apiLink = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";


$url1 = explode ("?si", $sourceLink)[0];
$url2 = explode ("/", $url1);
$videoId = end ($url2);
//print_r($videoId);

$thumbnail = str_replace("<insert-youtube-video-id-here>", $videoId, $apiLink);
echo '<img src=" ' . $thumbnail . ' "width="350px">';
}

providethubnail("https://youtu.be/LaTBVhtfPUo?si=BhiJc4eYp_LDV1Ei");


echo "<br><br>";



 echo "<h3>File extention with function using Explode</h3>";
  echo "<h4>~Homework 2~</h4>";


//explode with reverse

$fileName = "Home.Work.Video.MP3";
$reverse = array_reverse(explode(".", $fileName))[0];
echo $reverse;

echo "<br> OR <br>";


//explode with end & Condition

$file = "HD.Video.MP4";
$new = explode(".", $file);
$devided = end($new);
//echo $devided;

if ($devided == "zip") {
	echo "accepted";
}else{
	echo "convert to zip";
}


echo "<h4>=>Use of Empty</h4>";

 //empty instead of != or null; doesn't accepts "empty" value (used for compolsary data)

 $user = " Akila ";
 if(empty($user)){
 	echo "Enter Your Name";
 }else{
 	echo "Welcome Home $user";
 }

echo "<br><br>";

  $user = "";
 if(empty($user)){
 	echo "Enter Your Name";
 }else{
 	echo "Welcome Home $user";
 }
echo "<br><br>";


echo "<h4>=>Isset</h4>";

 //isset- sets data instead of null; accepts " " value (used for optional data)


$user = null;   //didn't printed anything

if(isset($user)){
	echo "Bye";
}
echo "<br><br>";


$user = " ";  //printed 

if(isset($user)){
	echo "Hi";
}
echo "<br><br>";



echo "<h4>=>Implode</h4>";

//implode or join; converts array to string


$numbers = [1,0,2,5,8];
$sum = implode(" " , $numbers);
print_r($sum);
echo "<br><br>";
 	
$name = [strtoupper("akila"), str_shuffle("jahan"), "tasnim"];
$attachName = implode(" <br> ", ($name));
print_r($attachName);
echo "<br><br>";



echo "<h4>=>Explode</h4>";

//explode; coverts strings to array

$declare = "Happy New Year 2023";
print_r(explode(" ", $declare));












