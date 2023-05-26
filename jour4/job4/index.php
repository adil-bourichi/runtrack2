<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="email" name="email">
        <input type="submit" value="Envoyer">
    </form>

    <table>
        <theah>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>

            </tr>
            </thead>
            <tr>
                <td>
                    <?php foreach ($_POST as $name => $mail) {
                        echo $name . "<br>";
                    } ?>
                </td>
                <td>
                    <?php foreach ($_POST as $name => $mail) {
                        echo $mail . "<br>";
                    } ?></td>
                </td>

            </tr>
    </table>

</body>

</html>