<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(isset($_COOKIE['fruit']))
{
    echo "Your favorite fruit is " . $_COOKIE['fruit'];
}
else {
    echo "I don't know your favorite fruit";
}
