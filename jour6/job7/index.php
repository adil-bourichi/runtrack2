<!DOCTYPE html>
<html>

<head>
    <title>Formulaire de transformation</title>
</head>

<body>
    <form method="post" action="">
        <label for="str">Texte :</label>
        <input type="text" name="str" id="str" required><br><br>

        <label for="fonction">Transformation :</label>
        <select name="fonction" id="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <input type="submit" name="submit" value="Valider">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $str = $_POST['str'];
        $fonction = $_POST['fonction'];

        if ($fonction === 'gras') {
            $str = mettreEnGrasMotsCommencantParMajuscule($str);
        } elseif ($fonction === 'cesar') {
            $str = decaleCaracteres($str);
        } elseif ($fonction === 'plateforme') {
            $str = ajouterUnderscoreMotsFinissantParMe($str);
        }

        echo $str;
    }

    function mettreEnGrasMotsCommencantParMajuscule($str)
    {
        return preg_replace_callback('/\b[A-Z]\w*\b/', function ($match) {
            return '<b>' . $match[0] . '</b>';
        }, $str);
    }

    function decaleCaracteres($str, $decalage = 2)
    {
        $resultat = '';
        $length = strlen($str);

        for ($i = 0; $i < $length; $i++) {
            $char = $str[$i];

            if (ctype_alpha($char)) {
                $ascii = ord($char);
                $decale = $ascii + $decalage;

                if (ctype_upper($char)) {
                    $decale = ($decale - 65) % 26 + 65;
                } else {
                    $decale = ($decale - 97) % 26 + 97;
                }

                $char = chr($decale);
            }

            $resultat .= $char;
        }

        return $resultat;
    }

    function ajouterUnderscoreMotsFinissantParMe($str)
    {
        return preg_replace('/\b(\w*me)\b/', '$1_', $str);
    }
    ?>

</body>

</html>