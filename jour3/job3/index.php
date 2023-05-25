<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";

$vowels = ['a', 'e', 'i', 'o', 'u', 'y']; 

foreach (str_split($str) as $character) {
    if (in_array(strtolower($character), $vowels)) {
        echo $character;
    }
}
?>
