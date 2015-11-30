<?php
$random = rand(1,100);
session_id($random);
session_start();
// echo session_id(); if you're a cheater uncomment this!!

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

/*create a session that stores a number between 1-100 when a user loads the page*/
/*tell the user if they are too low or too high after they guess*/
/*tell the user if they have the correct answer and give them the option to play again*/

</style>

</body>
  <div id="container">
    <h1>WELCOME TO THE GREAT NUMBER GAME</h1>
    <h2>I am thinking of a number between 1 and 100</h2>
    <h2>Take a guess!</h2>
	
    <form action="result.php" method="post">
    	<input type="text" name="number" placeholder="Guess Number">
      <input type="submit" value="Submit">
    </form>
    </div>



</html>