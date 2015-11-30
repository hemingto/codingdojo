
<?php 

function get_max_and_min($array)
{
	$max = $array[0];
	$min = $array[0];

	for($i=0; $i < count($array); $i++)
	{
		if($array[$i] < $min)
		{
			$min = $array[$i];
		}
		if($array[$i] > $max)  
		{
			$max = $array[$i];
		}
	}
	
	$max_min_array= array('max' => $max, 'min' => $min);
	return $max_min_array;
}

$sample = array(135,2.4,2.67,1.23,332,2,1.02);
$output = get_max_and_min($sample);
var_dump($output);

?>
