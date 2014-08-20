<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function fillArray(){
	$array = array();
	for($i=0; $i<100; $i++){
		$array[] = rand(0,10000);
	}
	return $array;
}

function swapValues($array, $index1, $index2){
	//Swap in place
	$temp = $array[$index1];
	$array[$index1] = $array[$index2];
	$array[$index2] = $temp;
	return $array;
}

function insertionSort($array){
	for($i=1;$i<count($array);$i++){
		for($j=$i; $j>0; $j--){
			if($array[$j-1]>$array[$j])
				$array = swapValues($array, $j-1, $j);
		}
	}
	return $array;
}

$time_start = microtime_float();
$array = insertionSort(fillArray());
$time_end = microtime_float();
$duration = $time_end - $time_start;
echo $duration;

var_dump(insertionSort($array));

?>