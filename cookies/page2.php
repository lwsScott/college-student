<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>
<body>
<?php

if(isset($_COOKIE['name'])) {

    $name = $_COOKIE['name'];
}
else
{
    $name = "Stranger";
}
//echo "<h2>Hello, " . $_COOKIE['name'] . "</h2>";
echo "<h2>Hello, $name</h2>";

if(isset($_COOKIE['movie'])) {

    $movie = $_COOKIE['movie'];
}
else
{
    $movie = "Nothing";
}
echo "<h2>Favorite Movie: $movie</h2>";



?>
<p>This is Page 2</p>

</body>
</html>


