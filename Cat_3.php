<?php 
function getlargest($num1, $num2, $num3){
	if($num1>$num2){
		if ($num1>$num3){
			echo "$num1 is Greater";
		}
		else{
			echo "$num3 is Greater";
		}
	}
	else{
		if ($num2>$num3){
			echo "$num2 is Greater";
		}
		else{
			echo "$num3 is Greater";
		}
	}
}