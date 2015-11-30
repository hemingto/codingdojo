
<?php 

function coin_throw() 
{
	$headscount = 0;
	$tailscount = 0;
	
	for($i=1; $i<5001; $i++) 
	{
		$number = rand(0,1);
		
		if($number === 0)
		{
			$headscount++;
			
			echo "<h1> Attempt #" . $i . ": </h1> ";
			echo "Throwing a coin...It's a head! ...Got" . " " . $headscount . " " . "head(s) so far and " . " " . $tailscount . " " . "tail(s) so far <br / >";
		} else 
		{
			$tailscount++;
			
			echo "<h1> Attempt #" . $i . ": </h1> <br/>";
			echo "Throwing a coin...It's a tail! ...Got" . " " . $headscount . " " . "head(s) so far and " . " " . $tailscount . " " . "tail(s) so far <br / >";
		}
		
	}
}

coin_throw();

?>
