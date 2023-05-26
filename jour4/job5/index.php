<!DOCTYPE html>
<html>

<head>
    <title>Formulaire de connexion</title>
</head>

<body>
    <h2>Connexion</h2>
    <form action="index.php" method="POST">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
    <?php
    if ($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'John' && $password === 'Rambo') {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    ?>

</body>

</html>