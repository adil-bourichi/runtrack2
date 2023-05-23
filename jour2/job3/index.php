<!DOCTYPE html>
<html>
<head>
    <title>Nombre avec styles</title>
    <style>
        .italic {
            font-style: italic;
        }

        .underline {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i === 42) {
            echo "La Plateforme_";
        } elseif ($i >= 0 && $i <= 20) {
            echo "<i>" . $i . "</i>";
        } elseif ($i >= 25 && $i <= 50) {
            echo "<span class='underline'>" . $i . "</span>";
        } else {
            echo $i;
        }

        echo "<br />";
    }
    ?>
</body>
</html>
