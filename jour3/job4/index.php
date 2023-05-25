<?php
$str = "Dans l'espace, personne ne vous entend crier.";

$characterCount = 0;
foreach (str_split($str) as $character) {
    $characterCount++;
}

echo "Le nombre de caractères dans la chaîne est : " . $characterCount;
?>
