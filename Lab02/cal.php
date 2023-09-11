<?php
	function add($x,$y){
		return($x+$y);
	}
	
	function subtract($x,$y){
		return($x-$y);
	}
	
	function multiply($x,$y){
		return($x*$y);
	}
	
	function divide($x,$y){
		return($x/$y);
	}
	
	echo "3 + 5 = " . add(3,5) . "<br>";
	echo "5 * 5 = " . multiply(5,5) . "<br>";
	echo "9 - 2 = " . subtract(9,2) . "<br>";
	echo "8 / 2 = " . divide(8,2) . "<br>";
?>