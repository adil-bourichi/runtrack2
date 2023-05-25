<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";

$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

$lowercaseStr = strtolower($str);

$characters = str_split($lowercaseStr);
foreach ($characters as $character) {
    if (preg_match('/[a-z]/', $character)) {
        if (in_array($character, array('a', 'e', 'i', 'o', 'u', 'y'))) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelles"]; ?></td>
                <td><?php echo $dic["consonnes"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
