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
$str = "Les choses que l'on possède finissent par nous posséder.";

$reversedStr = '';
$length = strlen($str);

for ($i = $length - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

echo $reversedStr;
?>
</body>
</html>

