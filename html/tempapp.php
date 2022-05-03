<meta http-equiv="refresh" content="3">

<?php

$distance = file_get_contents("data.txt");

if ($distance >= 30){
	$color="green";
	}else {
		$color="red";
	}
	
print "<h1 style='text-align:center;'>Arduino/Raspberry Pi Temp Web Device</h1>";
print "<br>";
	
print "<p style='text-align:center; font-size:200px; margin-top:10px; margin-bottom:10px; color:".$color.";'>".$distance."</p>";


?>
