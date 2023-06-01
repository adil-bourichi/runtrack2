<!DOCTYPE html>
<html>
<head>
    <title>Ajout de prénoms</title>
</head>
<body>
    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        
        <input type="submit" name="ajouter" value="Ajouter">
        <input type="submit" name="reset" value="Reset">
    </form>
    
    <?php
    session_start();
    
    if (isset($_POST['ajouter'])) {
        $prenom = $_POST['prenom'];
        
        if (!isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'] = [];
        }
        
        array_push($_SESSION['prenoms'], $prenom);
    }
    
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
    
    if (isset($_SESSION['prenoms']) && count($_SESSION['prenoms']) > 0) {
        echo "<h2>Liste des prénoms :</h2>";
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>$prenom</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
