<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numbers = [200, 204, 173, 98, 171, 404, 459];

    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            echo $number . " est paire<br />";
        } else {
            echo $number . " est impaire<br />";
        }
    }
    ?>

</body>

</html>