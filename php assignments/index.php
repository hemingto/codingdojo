<?php
// first pass at the assignment going to make improvements later
session_start();

?>

<html>

<style>

  form input {
    display: block;
    margin:5px;
    padding:2px;
    margin:10 auto;

  }

  div {
    width:90%;
    margin:10% auto;
  }

</style>


<body>

<div>

  <form action="process.php" method="post">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="first_name" placeholder="first name">
    <input type="text" name="last_name" placeholder="last name">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="confirm_password" placeholder="confirm password">
    <input type="date" name="birthday">
    <input type="submit" name="submit">
  </form>

  <?php
    if(! empty($_SESSION['errors']))
    {
      foreach($_SESSION['errors'] as $errors)
      {
        echo $errors;
      }
    }

   ?>

</div>


</body>


</html>

