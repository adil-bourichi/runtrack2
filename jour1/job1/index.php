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
    $str = "LaPlateforme";
    echo $str. "<br>";

    $str2 = "Vive";
    $str3 = "!";
    echo $str2 . " " . $str. $str3 . "<br>";

    $val = 6;
    echo $val ."<br>" ;

    $val += 4 ;
    echo $val."<br>";

    $myBool = true ;
    echo var_export($myBool, true) . "<br>";

    $myBool = false;
    echo var_export($myBool, true) . "<br>";
    
    
    ?>
</body>

</html>