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
                            <td><?php echo $record['Title'];?></td>
                            <td><?php echo $record['Year'];?></td>
                            <td><?php echo $record['Genre'];?></td>
                            <td><?php echo $record['Poster'];?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>