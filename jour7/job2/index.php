<?php
$expire = time() + (86400 * 30); // Expiration du cookie dans 30 jours

if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 0;
} else {
    $nbvisites = $_COOKIE['nbvisites'];
}

if (isset($_POST['reset'])) {
    $nbvisites = 0;
}

$nbvisites++;

setcookie('nbvisites', $nbvisites, $expire);

echo "Nombre de visites : " . $nbvisites;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <form method="post" action="">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
