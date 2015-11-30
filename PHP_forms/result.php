
<?php

var_dump($_POST)


?>

<html>

<style>

#container {
	margin: 10% auto;
	border:2px solid orange;
	height:400px;
	border-radius: 2%;
	width:600px;
	background-color: #ffdb99;
}

h1 {
	text-align: center;
}

p {
	margin-left:100px;
}

#submit {
	margin-left:535px;
	background-color: orange;
	outline: none;
	padding:5px;
	border:solid black 1px;
	border-radius: 2px;

}

</style>

<body>
	
	<div id="container">
		<h1>SUBMITTED INFO</h1>
		<p>NAME: <?php echo $_POST['name']; ?></p>
		<p>Location: <?php echo $_POST['location']; ?></p>
		<p>Language: <?php echo $_POST['language']; ?></p>
		<p>Comments: <?php echo $_POST['comment']; ?></p>
		<form action="index.php"><input id="submit" type="submit" value="Back"></form>
		
	</div>

</body>

</html>