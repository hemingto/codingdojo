
<?php 



function grade($number) {
	if($number <= 70) 
	{
		echo "<h1> Your Score:" . " " . $number . "/100 <br />";
		echo "<h2> Your Grade is a D </h2> <br />";
	} else if ($number > 70 && $number <= 80) 
	{
		echo "<h1> Your Score:" . " " . $number . "/100 <br />";
		echo "<h2> Your Grade is a C </h2> <br />";
	} else if ($number > 80 && $number <= 90) 
	{
		echo "<h1> Your Score:" . " " . $number . "/100 <br />";
		echo "<h2> Your Grade is a B </h2> <br />";
	} else 
	{
		echo "<h1> Your Score:" . " " . $number . "/100 <br />";
		echo "<h2> Your Grade is an A </h2> <br />";
	}
}

for($i=0; $i<100; $i++) 
{
	$score = rand(50,100);
	grade($score);
}


?>
