<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */
require('includes/check_login.php');
require('includes/header.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>


<?php
include("navbar.html");
?>
<h2> Settings</h2>

<form id="navColor" action="#" method="post">
    <fieldset class="form-group">
        <legend>Nav bar Color</legend>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="color" id="blue" value="blue">
            <label class="form-check-label" for="pickup">
                Blue
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="color" id="gray" value="gray">
            <label class="form-check-label" for="delivery">
                Gray
            </label>
        </div>
        <div>
            <input class="form-check-input" type="radio" name="color" id="purple" value="purple">
            <label class="form-check-label" for="pickup">
                Purple
            </label>
        </div>
    </fieldset>
    <button id="submit"  type="submit" class="btn btn-primary">Save</button>
</form>
<?php
    var_dump($_POST);
    $color = $_POST['color'];
    $_SESSION['color'] = $color;
    var_dump($_SESSION);
?>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>