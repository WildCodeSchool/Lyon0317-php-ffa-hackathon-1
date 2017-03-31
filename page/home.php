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
            <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-primary">Give me a movie</button>
            </div>
        </form>
    </div>
</div>

<?php

$json = $movieManager->workCurl();

?>

<div class="container outerpadding">
    <div class="row">
        <form action="" method="POST" id="formList" name="formList">
            <?php foreach($json->Search as $record => $s): ?>
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0 col-md-4 col-lg-3">
                    <div class="panel">
                        <div class="panel-heading text-center"><strong><?php echo $s['Title']?></strong></div>
                        <div class="panel-body">
                            <div class="boximg">
                                <img src="<?php echo $s['Poster'];?>" alt="Affiche du film" class="img-responsive">
                                <span class="label label-danger date"><?php echo $s['Year'];?></span>
                            </div>
                            <br>
                            <p class="pull-left">imdbID : <?php echo $s['imdbID']?></p><br>
                            <p class="pull-left"><?php echo $s['Type']?></p><br>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</div>
