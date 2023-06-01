<?php
if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + (86400 * 30)); 
    header('Location: ' . $_SERVER['PHP_SELF']); 
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); 
    exit();
}

if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo '<br><br><form method="post" action=""><input type="submit" name="deco" value="Déconnexion"></form>';
} else {
    echo '<form method="post" action=""><label for="prenom">Prénom :</label>';
    echo '<input type="text" name="prenom" id="prenom" required><br><br>';
    echo '<input type="submit" name="connexion" value="Connexion"></form>';
}
?>
