<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function Vowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $Count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $Count++;
        }
    }
    return $Count;
}

foreach ($strings as $string) {
    $vCount = Vowels($string);
    $rString = strrev($string);
    echo "Original String: $string, Vowel Count: $vCount, Reversed String: $rString.<br>";
}

