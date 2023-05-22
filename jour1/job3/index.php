<!DOCTYPE html>
<html>
<head>
    <title>Tableau des variables</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    // Variables
    $boolVar = true;
    $intVar = 42;
    $strVar = "Hello";
    $floatVar = 3.14;

    // Tableau HTML
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Type</th>";
    echo "<th>Nom</th>";
    echo "<th>Valeur</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>boolean</td>";
    echo "<td>boolVar</td>";
    echo "<td>" . var_export($boolVar, true) . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>integer</td>";
    echo "<td>intVar</td>";
    echo "<td>" . $intVar . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>string</td>";
    echo "<td>strVar</td>";
    echo "<td>" . $strVar . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>float</td>";
    echo "<td>floatVar</td>";
    echo "<td>" . $floatVar . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>
