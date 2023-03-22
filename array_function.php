<?php


$array = ['mcihira', 'Ian', 'Classroom 1', 'Form 4', 'Government', 'Kenya', 'Children', 'Stolen', 'Died', 'Whichever'];

// printing out the arrays with print_r
print_r($array);

// counting the elements in the array

echo "<br>There are " . count($array) . " elements in the group";


// is_array() used to check if variable is used to 
// check if a variable is an array or some other data type.
$arrays = 10;
echo "<hr>";
// returns  1 or True
echo is_array($array) . "\t\t\t";
// echo boolval(is_array($array));
echo "<br>";
// returns  0 or False
echo intval(is_array($arrays)) . "\t\t\t";
// echo boolval(is_array($arrays));



echo "<hr>";
// =======================================================================
// IN_ARRAY() function

// checks if element exist in the array

$arrayss = ['23', 'hundred', 'xxxx', 'hated'];
// returns false
if (in_array('hundreds', $arrayss)) {
    echo 'True';
} else {
    echo 'False';
}


// ================================================================================

// EXPLODE() FUNCTION
// functionto split a string into a multiple parts and returns 
// it as an array



$strings = "one, two, three, four. five, six, eight";

$arrs = explode(",", $strings);
echo "<pre>";
print_r($array);



// ========================================================================
echo "<hr>";
// IMPLODE() FUNCTION
// THE FUNCTION GIVEN AN ARRAY WILL GLUE IT TO A STRING

$k_array = ['one', 'ten', 'hundred', 'thousand', 'Million'];

$k_strings = implode(",", $k_array);

echo "the imploded strings is " . $k_strings;

// =========================================================================
echo "<hr>";
// array_push () function 
// used to add ner elements to the end of an array

$p_array = ['one', 'two', 'three', 'four', 'five'];
array_push($p_array, "six");
echo "<pre>";
print_r($p_array);

// =======================================================================
// ARRAY_POP() FUNCTION 

// FUNCTIONS REMOVES AN ELEMENT FROM THE END OF AN ARRAY

$pop_array = ['one', 'two', 'three', 'four', 'five'];
$element = array_pop($pop_array);
echo "<hr><pre>";
print_r($pop_array);


// ======================================================================


// ARRAY SLICE () FUNCTION 
// ARRAY_SLICE() FUNCTION IS useful when you want to extract some 
// portion of a given array  It accepts four parameters: the array, 
// the index from which to slice, the number of elements to slice, and 
// whether to preserve the numerical key. The function will always preserve
//  string keys, irrespective of the fourth parameter.

$people = ["Adam", "Amanda", "Andrew", "Laura", "Monty", "Sally", "Sajal", "Steven"];

$members = array_slice($people, 2, 4);

echo "<hr><pre>";
print_r($members);



// ===============================================================


// The array_splice() Function 
// useful when you want to get rid of a portion of an array and/or
//  replace it with something else. It accepts four parameters: array,
//  offset index from which to begin the removal , the lengthh to remove 
//  and the optionnal replcement for the remove paramter
$all_items = ["Charger", "Keyboard", "Smartphone", "Baseball", "Bat", "Mouse"];
$replacements = ["Pen", "Headphones"];
array_splice($all_items, 3, 2, $replacements);

echo "<hr><br>";
print_r($all_items);
