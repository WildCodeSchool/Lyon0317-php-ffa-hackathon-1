<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $year = $_POST['year'];
    $type = $_POST['type'];
    header('Location: ?page=list&title='.$title.'&year='.$year.'&type='.$type);
}

?>

<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
        <form action="" method="post" role="form">

            <legend>Look for a movie</legend>

            <div class="form-group">
                <label for="title"></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="What do you want to see ?" value="">
            </div>

            <div class="form-group">
                <label for="type"></label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Movie, Show, Episode" value="">
            </div>

            <div class="form-group">
                <label for="year"></label>
                <input type="text" class="form-control" name="year" id="year" placeholder="Year" value="">
            </div>
            <button type="submit"  class="btn btn-primary">Give me a movie</button>
        </form>
    </div>
</div>