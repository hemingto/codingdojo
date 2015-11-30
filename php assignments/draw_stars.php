
<?php 

function draw_stars($array) 
{
	for($i=0; $i<count($array); $i++)
	{
		if(is_string($array[$i])) 
		{
			for($j=0; $j< strlen($array[$i]); $j++)
			{
				echo $array[$i][0];
			}
			echo "<br />";
		} else 
		{
			for($j=0; $j< $array[$i]; $j++)
			{
				echo "*";
			}
			echo "<br />";
		}
	}
}

$A = array(1,5,7,25, "yo", "howdy");
draw_stars($A);

?>
