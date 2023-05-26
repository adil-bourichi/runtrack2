<!DOCTYPE html>
<html>

<head>
    <title>Formulaire de nombre pair/impair</title>
    <style>
        .result {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h2>Vérification de nombre pair/impair</h2>
    <form method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        if (is_numeric($nombre)) {
            if ($nombre % 2 === 0) {
                echo '<div class="result">Nombre pair</div>';
            } else {
                echo '<div class="result">Nombre impair</div>';
            }
        } else {
            echo '<div class="result">Veuillez entrer un nombre valide</div>';
        }
    }
    ?>
</body>

</html>