<!DOCTYPE html>
<html>
<head>
    <title>Nombres premiers</title>
</head>
<body>
    <?php
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }

    for ($i = 2; $i <= 1000; $i++) {
        if (isPrime($i)) {
            echo $i . "<br />";
        }
    }
    ?>
</body>
</html>
