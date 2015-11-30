
<?php 

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

function states_array($array) 
{
	echo "<select>";
	for($i=0; $i<count($array); $i++)
	{
		echo "<option>" . $array[$i] . "</option>";
	}
	echo "</select>";
}

states_array($states);

function states_foreach($array) 
{
	echo "<select>";
	foreach($array as $value)
	{
		echo "<option>" . $value . "</option>";
	}
	echo "</select>";
}

states_foreach($states);

$states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');

states_foreach($states);

?>
