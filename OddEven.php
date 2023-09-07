<?php
	$num= $_REQUEST['Number'];
	$prime = 0;
//loop

	for ($i=2; $i < $num ; $i++) { 
		if ($num % $i == 0) {
			$prime = 1;
		}
	}

	if ($prime == 0) {
		echo "<h3>It's a prime number</h3>";
	}else{
		echo "<h3>It's not a prime number</h3>";
	}


?>