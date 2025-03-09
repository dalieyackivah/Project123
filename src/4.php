<?php
// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return mt_rand(1, 10);
}

// Example usage of the function
$randomNumber = getRandomNumber();
echo $randomNumber;
?>