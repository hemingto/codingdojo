<!DOCTYPE HTML>

<html>	

	<head>
			<meta charset="utf-8"/>
			<title>Checker Board</title>
			<meta name="description" content="HTML TABLE"/>
	</head>

<body>

	<style>

	body{
		margin:0;
		line-height: 0;
		padding: 0;
	}

	.square {
		width:45px;
		height:45px;
		display:inline-block;
	}

	.red {
		background-color: red;
	}

	.black {
		background-color: black;
	}

	.container {
		outline:2px black solid;
	}

	</style>

		<?php

		for($i=0; $i<8; $i++)
		{
			if($i%2 === 0) {
				
				for($j=0; $j<4; $j++)
				{
				echo "<div class='square red'></div><div class='square black'></div>";
				}

			} else {
				for($x=0; $x<4; $x++)
				{
				echo "<div class='square black'></div><div class='square red'></div>";
				}
			}
				echo "<br />";
		}

		?>

</body>

</html>