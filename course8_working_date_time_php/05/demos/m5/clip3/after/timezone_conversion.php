<?php

$tzone_idents = DateTimeZone::listIdentifiers();
$user_tzone = "";

if (isset($_POST['submit'])) {
    $user_tzone = $_POST['tz_selected'];
    $user_tzone_obj = new DateTimeZone($user_tzone);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Time Zone Selection</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main-content">

    <h1>Time Zone Conversion</h1>

    <form action="" method="post">

        <?php $dt = new DateTime('now'); ?>

        <label>Current Time: </label><?php echo $dt->format('F j, Y g:i a');?>

        <div class="controls">
            <label for="tz_selected">Target Time Zone: </label>

            <select name="tz_selected">
                <?php
                foreach($tzone_idents as $zone) {
                    $option_string = "";

                    $this_tz = new DateTimeZone($zone);
                    $dt->setTimezone($this_tz);
                    $offset = $dt->format('P');

                    $option_string.= '<option value="'. $zone . '"';
                    if ($user_tzone == $zone) { $option_string.= ' selected'; }
                    $option_string.= '>' . $zone . '(UTC/GMT' . $offset . ') </option>';

                    echo $option_string;
                }
                ?>
            </select>
        </div>

        <?php

        if (isset($_POST['submit'])) {

            $new_dt = new DateTime('now');
            $default_tzone_offset = $new_dt->getOffset();

            $new_dt->setTimezone($user_tzone_obj);
            $user_selected_tzone_offset = $new_dt->getOffset();

            $diff = $default_tzone_offset - $user_selected_tzone_offset;

            ?>

            <div class="controls">
                <label>New Time: </label>
                <?php echo $new_dt->format('F j, Y g:i a');?>
            </div>

            <div class="controls">
                <label>Time Difference: </label>
                <?php echo $diff/3600 . 'hours';?>
            </div>

        <?php } ?>

        <div class="controls">
            <input type="submit" name="submit" value="Submit" />
        </div>
    </form>

</div>

</body>
</html>