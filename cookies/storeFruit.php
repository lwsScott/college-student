<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(!empty($_POST['fruit']))
{
    // make persistent cookie for 1 day
    setcookie('fruit', $_POST['fruit'], time() + 3600);
    // redirect
    header("Location: showFruit.php");
}
