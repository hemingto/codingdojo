
<?php 

function multiplication_table($row, $column) 
{

	echo "<table>";

	for($i=1; $i<=$row; $i++)
	{
		echo "<tr>";
		for($j=1; $j<=$column; $j++)
		{
			echo "<td>" . $i * $j . "</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

}

multiplication_table(9,9);

?>
