
<?php
session_start();
var_dump($_SESSION);
$errors = array();

if(empty($_POST['email']))
{
    $errors[] = "You're email is empty. Fix it!!!! NOW!";
}

if(is_numeric($_POST['first_name']) || is_numeric($_POST['last_name'])) 
{
    $errors[] = "One of your names contains numbers";
}

if(strlen($_POST['password']) < 6)
{
    $errors[] = "Your password is too short";
}

if($_POST['password'] !== $_POST['confirm_password'])
{
    $errors[] = "Your passwords do not match!";
}

if(! empty($errors))
{
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
} else 
{
    echo "you are logged in!";
    $_SESSION['errors'] = array();
}




?>