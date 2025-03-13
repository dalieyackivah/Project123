<?php

// define variables and initialize with default values
$name = "Alice";
$age = 30;
$city = "New York";

// check if name is set in URL query string and override if necessary
if (isset($_GET['name'])) {
    $name = $_GET['name'];
}

// check if age is set in URL query string and override if necessary
if (isset($_GET['age'])) {
    $age = $_GET['age'];
}

// check if city is set in URL query string and override if necessary
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}

// display results
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "City: " . $city;

?>