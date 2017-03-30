<?php
$url = "http://www.omdbapi.com/?t=batman";

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

    // Will dump a beauty json :3
    $result = json_decode($url, true);

    $url = file_get_contents($url);


echo '<pre>'.print_r($url,true).'</pre>';

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
                        <th>Year</th>
                        <th>Type</th>
                        <th>Poster</th>
                    </tr>
                    <?php foreach($result as $record): ?>
                        <tr>
                            <td><?php echo $record->Title;?></td>
                            <td><?php echo $record->Year;?></td>
                            <td><?php echo $record->Genre;?></td>
                            <td><?php echo $record["Poster"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>