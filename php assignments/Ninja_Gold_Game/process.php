

<?php

session_start();

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}
if(!isset($_SESSION['history'])) {
    $_SESSION['history'] = "WELCOME to the NINJA GAME";
}

$_SESSION['building'] = $_POST['building'];

if($_SESSION['building'] == 'farm')
{
    $random = rand(10,20);

    $_SESSION['counter'] += $random;
    array_push($_SESSION['history'], "you entered a farm and earned" . " " . $random . " " . "gold");
    header('Location: index.php');
} 
elseif ($_SESSION['building'] == 'cave')
{
    $random = rand(5,10);

    $_SESSION['counter'] += $random;
    array_push($_SESSION['history'], "you entered a cave and earned" . " " . $random . " " . "gold");
    header('Location: index.php');
}
elseif ($_SESSION['building'] == 'house')
{
    $random = rand(2,5);

    $_SESSION['counter'] += $random;
    array_push($_SESSION['history'], "you entered a house and earned" . " " . $random . " " . "gold");
    header('Location: index.php');
} else {

    $fifty_fifty = rand(0,1);
    if($fifty_fifty == 1)
    {
    $random = rand(0,50);

    $_SESSION['counter'] -= $random;
    array_push($_SESSION['history'], "you entered a casino and lost" . " " . $random . " " . "gold");
    header('Location: index.php');
    } else {
    $random = rand(0,50);

    $_SESSION['counter'] += $random;
    array_push($_SESSION['history'], "you entered a casino and earned" . " " . $random . " " . "gold");
    header('Location: index.php'); 
    }

}








?>