<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
        <form action="" method="post" role="form">
            <input type="hidden" name="" value="">
            <legend>Look for a movie</legend>

            <div class="form-group">
                <label for="Title"></label>
                <input type="text" class="form-control" name="Title" id="Title" placeholder="What do you want to see ?" value="">
            </div>

            <div class="form-group">
                <label for="Type"></label>
                <input type="text" class="form-control" name="Type" id="Type" placeholder="A movie ? A tv show ? something else ?" value="">
            </div>

            <div class="form-group">
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

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Liste des contacts</div>
            <form action="" method="POST" id="formList" name="formList">
                <input type="hidden" name="userId" id="userId" value="">
                <table class="table">
                    <tr>
                        <th>Movie title</th>
                        <th>ImdbID</th>
                        <th>Year</th>
                        <th>Type</th>
                        <th>Poster</th>
                    </tr>
                    <?php foreach($json->Search as $record => $s): ?>
                        <tr>
                            <td><?php echo $s['Title']?></td>
                            <td><?php echo $s['imdbID']?></td>
                            <td><?php echo $s['Year'];?></td>
                            <td><?php echo $s['Type'];?></td>
                            <td><img src="<?php echo $s['Poster'];?>"></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>
