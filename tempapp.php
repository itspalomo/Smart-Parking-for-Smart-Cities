
<meta http-equiv="refresh" content="3">

<?php

$distance = file_get_contents("data.txt");
$parking = 5;
if ($distance >= 30){
	$color="green";
	}else {
		$color="red";
	}
	
print "<h1 style='text-align:center;'>ECE 146 Project: Smart City-Smart Parking</h1>";
print "<br>";
	
echo "<table border ='1' width = '100%' cellspacing ='0' >";
	echo '<td height = "500">';
			if( $distance >= 30 && $distance <=40){
				echo"<td style = 'background: green'> Parking Spot 1 </td>";
			}
				else{
					echo"<td style = 'background: red'> Parking Spot 1 </td>";
					$parking--;
					}

	echo "</td>";
		echo '<td height = "500">';
		if( $distance >= 20 && $distance < 30){
				echo"<td style = 'background: green'> Parking Spot 2 </td>";
			}
				else{
					echo"<td style = 'background: red'> Parking Spot 2 </td>";
					$parking --;
					}
	echo "</td>";
		echo '<td height = "500">';
		if( $distance <= 20 ){
				echo"<td style = 'background: green'> Parking Spot 3 </td>";
			}
				else{
					echo"<td style = 'background: red'> Parking Spot 3 </td>";
					$parking--;
					}
	echo "</td>";
		echo '<td height = "500">';
		if( $distance >= 30 || $distance <20){
				echo"<td style = 'background: green'> Parking Spot 4 </td>";
			}
				else{
					echo"<td style = 'background: red'> Parking Spot 4 </td>";
					$parking--;
					}
	echo "</td>";
		echo '<td height = "500">';
		if( $distance >= 30 && $distance<= 35){
				echo"<td style = 'background: green'> Parking Spot 5 </td>";
			}
				else{
					echo"<td style = 'background: red'> Parking Spot 5 </td>";
					$parking--;
					}
echo "</table>";
print"<br>";
print"<br>";
$str = "Parking Spaces Available:";
print"<p style='text-align:center; font-size:75px; margin-top:10px; margin-bottom:10px;'>".$str;
print "<p style='text-align:center; font-size:200px; margin-top:10px; margin-bottom:10px; color:".$color.";'>".$parking."</p>";


?>


