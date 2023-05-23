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
        for($x=0;$x<=1337;$x++){
            if ($x===42) {
                echo "<b><u>$x</u></b><br />";
            }else{
            echo $x.'<br />';
            }
        }
    ?>
</body>
</html>