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


    $bdd = new PDO('mysql:host=localhost;dbname=jour09', "root", "Zen4321@");

    $requete = $bdd->prepare("SELECT COUNT(*) AS nb_etudiants FROM etudiants");
    $requete->execute();
    $users = $requete->fetchAll();

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>nb_etudiants</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach($users as $key => $user){
        echo '<tr>';
        echo '<td>' . $user['nb_etudiants'] . '</td>';
        echo '</tr>';
    
    }
    
    echo '</tbody>';
    echo '</table>';
    ?>
</body>

</html>