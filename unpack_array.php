<?php
// support for unpacking arrays with string keys
$default_colors = ["body" => "red", "heading" => "blue", "sidebar" => "yellow"];
$user_colors = ["body" => "white", "paragraph" => "black"];

$them_colors = [...$default_colors,  ...$user_colors];

// echo count($them_colors);

// printing out the unpacked array

var_dump($them_colors);
echo "<br>";
// print_r($them_colors);


// You should note that array unpacking in this manner results 
// in overwriting existing values stored in string-based keys,
//  while numeric keys simply get renumbered. 