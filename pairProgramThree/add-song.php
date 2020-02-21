<?php
/*
 * Lewis Scott, David Haas
 * 305/pairProgramThree/add-song.php
 * adds songs to a database
 * Feb 14, 2020
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GRC Song List</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">

<?php
//var_dump($_POST);

// connect to database
require ('/home2/lscottgr/db.php');

//Get the form data and "escape" it
$song = mysqli_real_escape_string($cnxn, $_POST['song']);
$artist = mysqli_real_escape_string($cnxn, $_POST['artist']);
$album = mysqli_real_escape_string($cnxn, $_POST['album']);
$time = mysqli_real_escape_string($cnxn, $_POST['time']);
$genre = mysqli_real_escape_string($cnxn, $_POST['genre']);
$year = mysqli_real_escape_string($cnxn, $_POST['year']);
$plays = mysqli_real_escape_string($cnxn, $_POST['plays']);

// write a SQL statement
$sql = "INSERT INTO `music` (`song`, `artist`, `album`, `time`, `genre`, `year`, `plays`) VALUES
('$song', '$artist', '$album', '$time', '$genre', '$year', '$plays')";

//echo $sql;

// send query to database
$result = mysqli_query($cnxn, $sql);
//var_dump($result);
// print a confirmation
if ($result)
{
    echo "Song inserted successfully";
}
?>
    <br>
    <a href="new-song.php" id="submit" class="btn btn-primary">Add another Song</a>

    <br>

    <a href="songs.php" id="submit2" class="btn btn-primary">Back to Songs</a>


</div>
</body>
</html>


<!--<button id="submit"  type="button" class="btn btn-primary">Add another Song</button>-->