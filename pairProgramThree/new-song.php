<?php
/*
 * Lewis Scott, David Haas
 * 305/pairProgramThree/add-song.php
 * adds songs to a database
 * Feb 14, 2020
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
// connect to db
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GRC Songs</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>

<div class="container">
    <h3>Add a New Song</h3>

    <form id="song-form" action="add-song.php" method="post">

        <div class="form-group">
            <label for="song">Song</label>
            <input type="text" class="form-control"
                   id="song" name="song">
        </div>
        <div class="form-group">
            <label for="artist">Artist</label>
            <input type="text" class="form-control"
                   id="artist" name="artist">
        </div>
        <div class="form-group">
            <label for="album">Album</label>
            <input type="text" class="form-control"
                   id="album" name="album">
        </div>
        <div class="form-group">
            <label for="time">Time</label>
            <input type="text" class="form-control"
                   id="time" name="time">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select id="genre" name="genre">
                <option value="none">--Select--</option>

                <?php
                // connect to db
                require ('/home2/lscottgr/db.php');

                // write query
                $sql = ("SELECT DISTINCT genre FROM `music` ORDER BY genre ASC");

                // send query to db and get result
                $result = mysqli_query($cnxn, $sql);
                //var_dump($result);


                // process results
                foreach ($result as $row)
                {
                    // get the row data
                    $genre = $row['genre'];

                    // display options
                    if ($genre != "")
                    {
                        echo "<option value='$genre'>$genre</option>";
                    }
                }

                ?>
            </select>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control"
                       id="year" name="year">
            </div>
            <div class="form-group">
                <label for="plays">Plays</label>
                <input type="text" class="form-control"
                       id="plays" name="plays">
            </div>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="songs.php" id="submit2" class="btn btn-primary">Back to Songs</a>

    </form>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
