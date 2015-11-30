<!DOCTYPE HTML>

<html>	

	<head>
			<meta charset="utf-8"/>
			<title>HTML Table</title>
			<meta name="description" content="HTML TABLE"/>
	</head>

<body>

	<style>
		table, tr, td {
			font-family:arial;
			color:#292929;
		}

		tr:first-child, .bold {
			font-weight:600;
		}

		td {
			padding:8px;
			outline: 1px solid lightgray;
		}

		span {
			font-weight: 400;
		}

		.gray {
			background-color: gray;
		}

	</style>

	<table>
		<tr>
			<td>User #</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Full Name</td>
			<td>Full Name in Upper Case</td>
			<td>Length of full name <span>(without spaces)</span></td>
		</tr>

		<?php
			$users = array( 
			   array('first_name' => 'Michael', 'last_name' => 'Choi'),
			   array('first_name' => 'John', 'last_name' => 'Supsupin'),
			   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
			   array('first_name' => 'KB', 'last_name' => 'Tonel'),
			   array('first_name' => 'Hey', 'last_name' => 'Dude'),
			   array('first_name' => 'Tom', 'last_name' => 'Celek'),
			   array('first_name' => 'Kobe', 'last_name' => 'Bryant'),
			   array('first_name' => 'Steve', 'last_name' => 'Young'),
			   array('first_name' => 'Bob', 'last_name' => 'Ross'),
			   array('first_name' => 'Barry', 'last_name' => 'Bonds'),
			   array('first_name' => 'Andrew', 'last_name' => 'Luck'),
			   array('first_name' => 'John', 'last_name' => 'Steinbeck'),
			   array('first_name' => 'Ansel', 'last_name' => 'Adams'),
			   array('first_name' => 'Barack', 'last_name' => 'Obama') 
			);

			function add_users($array) {
				
				$i = 0;

				foreach($array as $key => $user) 
				{
						$i++;
						$fullname = $user['first_name'] . " " . $user['last_name'];
						$nospace = $user['first_name'] . $user['last_name'];
						$content = "<td class='bold'>" . $i . "</td> <td>" . $user['first_name'] . "</td> <td>" . $user['last_name'] . "</td> <td>" . $fullname . "</td> <td>" . strtoupper($fullname) . "</td> <td>" . strlen(trim($nospace)) . "</td> </tr>";
						
						if($i%5 === 0) {
						echo "<tr class='gray'>";
						echo $content; 
						} 
						else 
						{						
						echo "<tr>";
						echo $content;
						}
				}
			}

			add_users($users);
		?>
	
	</table>

</body>

</html>