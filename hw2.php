
<?php

//Different ways of output in PHP

 echo "<h1>Hello World!</h1>";
 print("<h2>Hello World!</h2>");

 //var_dump Prints statement with datatype & total number of character
 var_dump(1);
 var_dump("<h4>Hello World!</h4><br>");
 var_dump(true);
 var_dump("<h4>false</h4>"); 
 
//print_r works to organize things in Arrary
 print_r("Akila Jahan<br>");

 //strtoupper for Uppercase using printf/function
printf("Hi, Thats me! Me is %s. It's Homework %d.", strtoupper("Akila"), 2);

 //Use of function

echo "<h3>Result Sheet using parameter:</h3>";

//Function 1

function result($user_name, $eng, $bn, $math, $biology)
 {
 	$result = $eng + $bn + $math + $biology;

 	echo "$user_name Your total marks is: " . $result . "<br>";
}

result("Akila", 50, 40, 70, 80);


echo "<h3>Finding Bigger number:</h3>";

//function using condition
function number($a, $b, $c){

if($a>$b & $a>$c){
	echo "A is Bigger";

} else if($b>$a & $b>$c){
	echo "B is Bigger";

}else{
	echo "C is Bigger" ;
	}

}
number(10,20,5 );

 echo "<h2>===Home Work 2===</h2>";
echo "<h4>Total fan bill and watt:</h4>";
$par_watt = 14; 
$fan = 20*2;
echo "Total Fan watt = $fan <br>";
$fan_bill = $fan*$par_watt;
echo "Total Fan bill = $fan_bill <br><br>";

echo "<h4>Total AC bill and watt:</h4>";
$ac = 100*5;
echo("Total Ac watt = $ac <br>");
$ac_bill = $ac*$par_watt;
echo "Total Ac bill = $ac_bill <br><br>";

echo "<h4>Total Fridge bill and watt:</h4>";
$fridge = 150*2;
echo "Total Fridge watt = $fridge <br>";
$fridge_bill = $fridge*$par_watt;
echo "Total Fridge bill = $fridge_bill <br><br>";

echo "<h4>Total Electricity:</h4>";
$total_watt = $fan+$ac+$fridge;
echo "Total electricity = $total_watt <br>";

echo "<h4>Total Electricity bill:</h4>";
$total_bill = $fan_bill+$ac_bill+$fridge_bill;
echo "Total electricity bill  = $total_bill <br>";

echo "<h4>Total Watt using function:</h4>";
function total_watt($fan,$ac,$fridge,$par_watt){
    $total = $fan*2+$ac*5+$fridge*2;
    echo "Total electricity watt= $total <br>";
};

total_watt(20,100,150,14);

echo "<h4>Total electricity bill with function: </h4>";

function total_bill($fan,$ac,$fridge,$par_watt){
    $total = $fan*2*$par_watt+$ac*5*$par_watt+$fridge*2*$par_watt;
    echo "Total electricity bill = $total";
};
total_bill(20,100,150,14);


?>