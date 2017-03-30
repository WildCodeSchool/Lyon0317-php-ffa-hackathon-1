<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['Title'];
    $year = $_POST['Year'];
    $type = $_POST['Genre'];
}

?>

<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
        <form action="" method="post" role="form">
            <input type="hidden" name="" value="">
            <legend>Look for a movie</legend>

            <div class="form-group">
                <label for="keyword"></label>
                <input type="text" class="form-control" name="Title" id="Title" placeholder="What do you want to see ?" value="">
            </div>

            <div class="form-group">
                <label for="type"></label>
                <input type="text" class="form-control" name="Genre" id="Genre" placeholder="Movie, Show, Episode" value="">
            </div>

            <div class="form-group">
                <label for="year"></label>
                <input type="text" class="form-control" name="Year" id="Year" placeholder="Year" value="">
            </div>
            <button type="submit" class="btn btn-primary">Give me a movie</button>
        </form>
    </div>
</div>