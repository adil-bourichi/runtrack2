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

    $requete = $bdd->prepare("SELECT * FROM salles ORDER BY capacite ASC");
    $requete->execute();
    $users = $requete->fetchAll();

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>nom</th>";
    echo "<th>capacite</th>";
    echo "<th>id_etage</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach($users as $key => $user){
        echo '<tr>';
        echo '<td>' . $user['id'] . '</td>';
        echo '<td>' . $user['nom'] . '</td>';
        echo '<td>' . $user['capacite'] . '</td>';
        echo '<td>' . $user['id_etage'] . '</td>';
        echo '</tr>';
    
    }
    
    echo '</tbody>';
    echo '</table>';
    ?>
</body>

</html>