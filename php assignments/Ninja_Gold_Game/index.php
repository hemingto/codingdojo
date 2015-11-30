<?php

session_start();

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}
if(!isset($_SESSION['history'])) {
    $_SESSION['history'] = ["WELCOME to the NINJA GAME"];
}
?>

<html>

<style>

#header {
  width:100%;
}

#header h1, #header div, .box {
  display: inline-block;
}

#header div {
  outline:solid 2px black;
  width:150px;
  height:35px;
  margin-left: 10px;
}

#header h2 {
  margin:0px;
  padding: 5px;
}

#options {
  width:100%;
  margin: 0 auto;
  text-align: center;
}

.box {
  margin:25px;
  width:250px;
  height: 250px;
  outline: 2px solid black;
}

#history_box {
  width:90%;
  height:250px;
  overflow: scroll;
  margin:0 auto;
  outline: 2px solid black;
}

</style>

<body>
    <div id="header">
        <h1>Your Gold:</h1>
        <div><?php echo "<h2>" . $_SESSION['counter'] . "</h2>" ?></div>
    </div>
    <div id="options">
        <div class="box">
            <h1>Farm</h1>
            <h2>earns 10-20 gold</h2>
            <form action="process.php" method="post">
                <input type="hidden" name="building" value="farm">
                <input type="submit" value="submit">
            </form>
        </div>
        <div class="box">
            <h1>Cave</h1>
            <h2>earns 5-10 gold</h2>
            <form action="process.php" method="post">
                <input type="hidden" name="building" value="cave">
                <input type="submit" value="submit">
            </form>
        </div>
        <div class="box">
            <h1>House</h1>
            <h2>earns 2-5 gold</h2>
            <form action="process.php" method="post">
                <input type="hidden" name="building" value="house">
                <input type="submit" value="submit">
            </form>
        </div>
        <div class="box">
            <h1>Casino!</h1>
            <h2>earns/takes 0-50 gold</h2>
            <form action="process.php" method="post">
                <input type="hidden" name="building" value="casino">
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
    <div id="history">
        <h2>Activities:</h2>
        <div id="history_box">
          <?php 

          foreach ($_SESSION['history'] as $history) 
          {
            echo "<p>" . $history . "</p>";
          }

           

          ?>

        </div>
    </div>


</body>


</html>

