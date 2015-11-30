
<?php

session_start();

?>

<html>

<head>

</head>

<body>

<style>

#container {
	margin: 10% auto;
	text-align: center;
}

.result {
	width:250px;
	height:250px;
	margin:0 auto;
}

.green {
	background-color: green;
}

.red{
	background-color: red;
}

input {
	margin-top: 5%;
}


/*create a session that stores a number between 1-100 when a user loads the page*/
/*tell the user if they are too low or too high after they guess*/
/*tell the user if they have the correct answer and give them the option to play again*/

</style>

</body>
  <div id="container">
    <h1>WELCOME TO THE GREAT NUMBER GAME</h1>
    <h2>I am thinking of a number between 1 and 100</h2>
    <h2>Take a guess!</h2>

    <?php 
    if($_POST['number'] > session_id())
    {
    	echo "<div class='result red'><h1>Too HIGH!</h1><h2>Guess Again</h2></div>";
    } 
	elseif ($_POST['number'] < session_id())
    {
    	echo "<div class='result red'><h1>Too LOW!</h1><h2>Guess Again</h2></div>";
    } 
    else 
    {
    	echo "<div class='result green'><h1>GOOD GUESS!</h1><h2>You Got it!</h2><form action='index.php' method='post'><input type='submit' value='Play Again'></form></div>";
    }

    ?>
	
    <form action="result.php" method="post">
    	<input type="text" name="number" placeholder="Guess Number">
      <input type="submit" value="Submit">
    </form>
    </div>



</html>