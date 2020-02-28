<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */
/*
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
*/

//Turn on error reporting -- this is critical!
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

// see if user is logged in
//session_start();
//if (!isset($_SESSION['username']))
//{
    // store current location
  //  $_SESSION["page"] = $_SERVER["SCRIPT_URI"];

    // redirect to login page
    //header("location: login.php");
//}
$title = "Admin page";
require ('includes/check_login.php');
require  ('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">

<?php
    include("navbar.html");
?>
    <h1>Admin Page</h1>
    <p>This page contains super-sensitive data</p>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>