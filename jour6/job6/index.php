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
    function leetSpeak($str)
    {
        $str = str_ireplace(['A', 'B', 'E', 'G', 'L', 'S', 'T'], ['4', '8', '3', '6', '1', '5', '7'], $str);
        return $str;
    }
    $texte = "Leet Speak";
    $resultat = leetSpeak($texte);
    echo $resultat;

    ?>
</body>

</html>