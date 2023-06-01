<?php
session_start();

if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
}

if (isset($_POST['reinitialiser'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
}

function afficherGrille()
{
    echo '<table>';
    for ($i = 0; $i < 3; $i++) {
        echo '<tr>';
        for ($j = 0; $j < 3; $j++) {
            echo '<td>';
            echo '<form method="post" action="">';
            echo '<input type="submit" name="case" value="' . $_SESSION['grille'][$i][$j] . '" ';
            if ($_SESSION['grille'][$i][$j] != '-') {
                echo 'disabled ';
            }
            echo '>';
            echo '<input type="hidden" name="row" value="' . $i . '">';
            echo '<input type="hidden" name="col" value="' . $j . '">';
            echo '</form>';
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

function verifierVictoire()
{
    $grille = $_SESSION['grille'];

    // Vérification des lignes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] != '-' && $grille[$i][0] == $grille[$i][1] && $grille[$i][0] == $grille[$i][2]) {
            return true;
        }
    }

    // Vérification des colonnes
    for ($j = 0; $j < 3; $j++) {
        if ($grille[0][$j] != '-' && $grille[0][$j] == $grille[1][$j] && $grille[0][$j] == $grille[2][$j]) {
            return true;
        }
    }

    // Vérification des diagonales
    if ($grille[0][0] != '-' && $grille[0][0] == $grille[1][1] && $grille[0][0] == $grille[2][2]) {
        return true;
    }

    if ($grille[0][2] != '-' && $grille[0][2] == $grille[1][1] && $grille[0][2] == $grille[2][0]) {
        return true;
    }

    return false;
}

if (isset($_POST['case'])) {
    $row = $_POST['row'];
    $col = $_POST['col'];
    $joueur = ($_SESSION['grille'][$row][$col] == 'X') ? 'O' : 'X';
    $_SESSION['grille'][$row][$col] = $joueur;

    if (verifierVictoire()) {
        echo $joueur . ' a gagné !';
        $_SESSION['grille'] = [
            ['-', '-', '-'],
            ['-', '-', '-'],
            ['-', '-', '-']
        ];
    } else {
        $casesRemplies = true;
        foreach ($_SESSION['grille'] as $ligne) {
            if (in_array('-', $ligne)) {
                $casesRemplies = false;
                break;
            }
        }
        if ($casesRemplies) {
            echo 'Match nul !';
            $_SESSION['grille'] = [
                ['-', '-', '-'],
                ['-', '-', '-'],
                ['-', '-', '-']
            ];
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Jeu du Morpion</h1>
    <?php
    if (isset($_POST['case']) || isset($_POST['reinitialiser'])) {
        afficherGrille();
    } else {
        echo '<p>Bienvenue !</p>';
    }
    ?>

    <form method="post" action="">
        <input type="submit" name="reinitialiser" value="Réinitialiser la partie">
    </form>
</body>

</html>