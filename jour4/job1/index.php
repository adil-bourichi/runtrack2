<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email" required><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (isset($_GET)) {
        foreach ($_GET as $name => $email)
        echo "Le nombre d'arguments GET envoyé est : " . $count;
        var_dump($_GET);
    }
    ?>
    
</body>
</html>