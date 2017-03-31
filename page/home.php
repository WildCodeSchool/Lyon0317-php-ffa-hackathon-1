<div class="row">

    <div class="col-xs-8 col-xs-offset-2">
        <form action="" method="post" role="form">
            <input type="hidden" name="" value="">
            <legend>Look for a movie</legend>

            <div class="form-group col-xs-12 col-sm-4">
                <label for="Title"></label>
                <input type="text" class="form-control" name="Title" id="Title" placeholder="What do you want to see ?" value="">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
                <label for="Type"></label>
                <input type="text" class="form-control" name="Type" id="Type" placeholder="A movie ? A tv show ? something else ?" value="">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
                <label for="Year"></label>
                <input type="text" class="form-control" name="Year" id="Year" placeholder="What year ?" value="">
            </div>
            <button type="submit" class="btn btn-primary">Give me a movie</button>
        </form>
    </div>
</div>

<?php

$json = $movieManager->workCurl();

?>


