<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sun rise-set details</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body id="main-content">

        <h1>Sunrise and Sunset for next 7 days</h1>

        <div>
            <form method="post">
                <div class="controls">
                    <label for="latitute">Latitude: </label>
                    <input type="text" name="latitude" id="latitude">
                </div>
                <div class="controls">
                    <label for="longitude">Longitude: </label>
                    <input type="text" name="longitude" id="longitude">
                </div>

                <div class="controls btn">
                    <input type="submit" name="check" value="Check" />
                </div>
            </form>
        </div>
        
<?php
        if (isset($_POST['check'])) { 


            $long = isset($_POST['longitude']) && ! empty($_POST['longitude']) ? $_POST['longitude'] : 77.102493;
            $lat = isset($_POST['latitude']) && ! empty($_POST['latitude']) ? $_POST['latitude'] : 28.704060;
        ?>
            <div>
                <p>
                    Longitude: <?= $long ?> <br>
                    Latitude: <?= $lat ?>
                </p>
            </div>

            <table>
                <tr>
                    <th>Date</th>
                    <th>Sunrise</th>
                    <th>Sunset</th>
                </tr>

                <?php

                    for ( $day = 0; $day <= 7; $day++) {

                        $date = new DateTime("+{$day} day");
                ?>
                    <tr>
                        <td><?= $date->format('D M j') ?></td>
                        <td><?  ?></td>
                        <td><?  ?></td>
                    </tr>

                <?php } ?>
            </table>
        
        <?php } ?>
    </body>
</html>