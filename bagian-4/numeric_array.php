<?php

$dairy = ["yoghurt","ice cream","cheese cake"];

// accessing values by their index
echo "I eat " . $dairy[0] . ", " . $dairy[1] . ", " . $dairy[2]. "!";

$arrayCount = count($dairy); // PHP built in function that returns the number of elements in the array

// looping through a numeric array using a for loop
for ($i = 0; $i < $arrayCount; $i++) {

    echo $dairy[$i]. "<br />";

}

?>