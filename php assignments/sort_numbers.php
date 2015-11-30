<?php 

$numbers = array();

for($i=0; $i<1000; $i++) {

	array_push($numbers, rand(1,1000));

}

var_dump($array);


function sort_numbers($array) 
{

	for($j=0; $j<count($array); $j++) {

		$min = $array[$j];
		$max = $array[$j];

		for($i=$j+1; $i<count($array); $i++) {

			if($min > $array[$i]) 
			{

				$min = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $min;

			}

			if($max < $array[$i])
			{
				$max = $array[$i];
				$array[$i] = $array[count($array) -1];
				$array[count($array) - 1] = $max; 
			}

		}
	}
	var_dump($array);
	echo microtime ();
}

// sort_numbers($numbers);

?>