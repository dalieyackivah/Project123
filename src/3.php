<?php
function getRandomWord() {
    $words = array("apple", "banana", "orange", "grape", "pineapple");
    $rand_keys = array_rand($words, 1);
    return $words[$rand_keys];
}
?>