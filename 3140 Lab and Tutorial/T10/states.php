<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$statesL = explode(" ",$states);
	$statesArray = array();
	for ($i=0; $i<count($statesL); $i++) {
		$len = strlen($statesL[$i]);
		if (($statesL[$i][$len-1]=="s")&&($statesL[$i][$len-2]=="a")&&($statesL[$i][$len-3]=="x")) {
			$statesArray[0] = $statesL[$i];
		}	
		else if (($statesL[$i][0]=="k"||$statesL[$i][0]=="K")&&($statesL[$i][$len-1]=="s"||$statesL[$i][$len-1]=="S")) {
			$statesArray[1] = $statesL[$i];
		}
		else if (($statesL[$i][0]=="m"||$statesL[$i][0]=="M")&&($statesL[$i][$len-1]=="s"||$statesL[$i][$len-1]=="S")) {
			$statesArray[2] = $statesL[$i];
		}
		else if ($statesL[$i][$len-1]=="a") {
			$statesArray[3] = $statesL[$i];
		}
		else if ($statesL[$i][0]=="m"||$statesL[$i][0]=="M") {
			$statesArray[4] = $statesL[$i];
		}
	}
	echo "a). ".$statesArray[0]."<br>";
	echo "b). ".$statesArray[1]."<br>";
	echo "c). ".$statesArray[2]."<br>";
	echo "d). ".$statesArray[3]."<br>";
	echo "e). ".$statesArray[4]."<br>";
?>