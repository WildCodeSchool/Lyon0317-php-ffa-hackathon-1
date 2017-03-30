<?php
require "index.php";

$url = "http://www.omdbapi.com/?s="  ;

    //  Initiate curl
    $ch = curl_init();
    // Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$url);
    // Execute
    curl_exec($ch);
    // Closing
    curl_close($ch);

$url = file_get_contents($url);

$json = json_decode($url, true);

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
                    <?php foreach($json['Search'] as $record => $s): ?>
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
