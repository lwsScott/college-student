<?php
/*
 * Lewis Scott, David Haas
 * 305/pairProgramThree/songs.php
 * reads and displays songs from a database
 * provides links to add new songs
 * Feb 14, 2020
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
// connect to db
require ('/home2/lscottgr/db.php');



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

    <h3>Song List</h3>

    <a href="new-song.php" id="submit" class="btn btn-primary">Add a new Song</a>

    <table id="student_table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Song</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Time</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Plays</th>
        </tr>


        </thead>

        <?php
        // define a query
        $sql = "SELECT * FROM `music` ORDER BY song ASC";

        // send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        // process the result
        foreach ($result as $row)
        {
            //var_dump($row);

            $id = $row['id'];
            $song = $row['song'];
            $artist = $row['artist'];
            $album = $row['album'];
            $time = $row['time'];
            $genre = $row['genre'];
            $year = $row['year'];
            $plays = $row['plays'];


            echo "<tr>
                    <td>$id</td>
                    <td>$song</td>
                    <td>$artist</td>
                    <td>$album</td>
                    <td>$time</td>
                    <td>$genre</td>
                    <td>$year</td>
                    <td>$plays</td>
                </tr>";

        }

        ?>
    </table>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $('#student_table').DataTable();
</script>

</body>
</html>